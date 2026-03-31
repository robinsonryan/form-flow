<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\FlowStatus;
use RobinsonRyan\FormFlow\Enums\ResponseStatus;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowSlot;
use RobinsonRyan\FormFlow\Models\FlowStep;
use RobinsonRyan\FormFlow\Models\FormTemplate;
use RobinsonRyan\FormFlow\Models\FormTemplateStep;
use RobinsonRyan\FormFlow\Services\FlowManager;
use RobinsonRyan\FormFlow\Services\StepResolver;
use RobinsonRyan\FormFlow\Services\Validation\HybridStepValidator;
use RobinsonRyan\FormFlow\Services\Validation\OpisJsonSchemaValidator;

uses(RefreshDatabase::class);

describe('FlowManager', function (): void {
    beforeEach(function (): void {
        $stepResolver = new StepResolver;
        $jsonSchemaValidator = new OpisJsonSchemaValidator;
        $stepValidator = new HybridStepValidator($jsonSchemaValidator);

        $this->manager = new FlowManager($stepResolver, $stepValidator);

        $this->flow = Flow::create([
            'key' => 'background-check',
            'name' => 'Background Check',
            'owner_scope' => 'global',
            'status' => FlowStatus::Active,
        ]);

        $this->accountId = 'account-123';
    });

    describe('getFlow', function (): void {
        it('retrieves an active global flow by key', function (): void {
            $flow = $this->manager->getFlow('background-check');

            expect($flow)->not->toBeNull()
                ->and($flow->id)->toBe($this->flow->id);
        });

        it('returns null for inactive flows', function (): void {
            $this->flow->update(['status' => FlowStatus::Draft]);

            $flow = $this->manager->getFlow('background-check');

            expect($flow)->toBeNull();
        });

        it('returns null for non-existent flows', function (): void {
            $flow = $this->manager->getFlow('non-existent');

            expect($flow)->toBeNull();
        });
    });

    describe('startFlow', function (): void {
        it('creates a new flow response', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
                initiatedById: 'user-123',
            );

            expect($response)->not->toBeNull()
                ->and($response->flow_id)->toBe($this->flow->id)
                ->and($response->account_id)->toBe($this->accountId)
                ->and($response->initiated_by)->toBe('user-123')
                ->and($response->initiated_by_type)->toBe(ActorType::Customer)
                ->and($response->status)->toBe(ResponseStatus::InProgress);
        });

        it('accepts initial data', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
                initialData: ['prefilled_field' => 'value'],
            );

            expect($response->responses)->toHaveKey('prefilled_field')
                ->and($response->responses['prefilled_field'])->toBe('value');
        });
    });

    describe('submitStep', function (): void {
        it('validates and saves step data', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'personal-info',
                'name' => 'Personal Information',
                'position' => 0,
                'fields' => [
                    ['key' => 'first_name', 'type' => 'text', 'required' => true],
                    ['key' => 'last_name', 'type' => 'text', 'required' => true],
                ],
            ]);

            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $result = $this->manager->submitStep($response, 'personal-info', [
                'first_name' => 'John',
                'last_name' => 'Doe',
            ]);

            expect($result->isValid())->toBeTrue();

            $response->refresh();

            expect($response->responses)->toHaveKey('personal-info')
                ->and($response->responses['personal-info']['first_name'])->toBe('John')
                ->and($response->isStepCompleted('personal-info'))->toBeTrue();
        });

        it('returns validation errors for invalid data', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'contact-info',
                'name' => 'Contact Information',
                'position' => 0,
                'fields' => [
                    ['key' => 'email', 'type' => 'email', 'required' => true],
                ],
            ]);

            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $result = $this->manager->submitStep($response, 'contact-info', [
                'email' => 'not-an-email',
            ]);

            expect($result->isInvalid())->toBeTrue()
                ->and($result->errors)->not->toBeEmpty();
        });

        it('rejects submissions to terminal responses', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-1',
                'name' => 'Step 1',
                'position' => 0,
                'fields' => [],
            ]);

            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $response->complete();

            $result = $this->manager->submitStep($response, 'step-1', []);

            expect($result->isInvalid())->toBeTrue()
                ->and($result->message)->toContain('completed');
        });
    });

    describe('handoff and resume', function (): void {
        it('hands off a response to an applicant', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $result = $this->manager->handOff($response, 'applicant@example.com');

            expect($result)->toBeTrue();

            $response->refresh();

            expect($response->status)->toBe(ResponseStatus::AwaitingApplicant)
                ->and($response->responses['_handoff']['email'])->toBe('applicant@example.com');
        });

        it('resumes a handed-off response', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $this->manager->handOff($response, 'applicant@example.com');
            $response->refresh();

            $result = $this->manager->resume($response);

            expect($result)->toBeTrue();

            $response->refresh();

            expect($response->status)->toBe(ResponseStatus::InProgress);
        });
    });

    describe('complete and cancel', function (): void {
        it('completes a response', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $result = $this->manager->complete(
                $response,
                'user-456',
                ActorType::Applicant,
            );

            expect($result)->toBeTrue();

            $response->refresh();

            expect($response->status)->toBe(ResponseStatus::Completed)
                ->and($response->completed_by)->toBe('user-456')
                ->and($response->completed_by_type)->toBe(ActorType::Applicant)
                ->and($response->submitted_at)->not->toBeNull();
        });

        it('cancels a response', function (): void {
            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $result = $this->manager->cancel($response);

            expect($result)->toBeTrue();

            $response->refresh();

            expect($response->status)->toBe(ResponseStatus::Cancelled);
        });
    });

    describe('progress tracking', function (): void {
        it('tracks step completion progress', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-1',
                'name' => 'Step 1',
                'position' => 0,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-2',
                'name' => 'Step 2',
                'position' => 1,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-3',
                'name' => 'Step 3',
                'position' => 2,
                'fields' => [],
            ]);

            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $context = new StepFilterContext(ActorType::Customer);

            $progress = $this->manager->getProgress($response, $context);

            expect($progress['total'])->toBe(3)
                ->and($progress['completed'])->toBe(0)
                ->and($progress['percentage'])->toBe(0.0);

            $this->manager->submitStep($response, 'step-1', []);
            $response->refresh();

            $progress = $this->manager->getProgress($response, $context);

            expect($progress['completed'])->toBe(1)
                ->and($progress['percentage'])->toBe(33.33);
        });

        it('gets the next incomplete step', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-1',
                'name' => 'Step 1',
                'position' => 0,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-2',
                'name' => 'Step 2',
                'position' => 1,
                'fields' => [],
            ]);

            $response = $this->manager->startFlow(
                flow: $this->flow,
                accountId: $this->accountId,
                initiatedByType: ActorType::Customer,
            );

            $context = new StepFilterContext(ActorType::Customer);

            $nextStep = $this->manager->getNextStep($response, $context);

            expect($nextStep)->not->toBeNull()
                ->and($nextStep->key)->toBe('step-1');

            $this->manager->submitStep($response, 'step-1', []);
            $response->refresh();

            $nextStep = $this->manager->getNextStep($response, $context);

            expect($nextStep)->not->toBeNull()
                ->and($nextStep->key)->toBe('step-2');
        });
    });
});

describe('Full Flow Scenarios', function (): void {
    beforeEach(function (): void {
        $stepResolver = new StepResolver;
        $jsonSchemaValidator = new OpisJsonSchemaValidator;
        $stepValidator = new HybridStepValidator($jsonSchemaValidator);

        $this->manager = new FlowManager($stepResolver, $stepValidator);
        $this->accountId = 'account-123';
    });

    it('completes a full applicant-only flow', function (): void {
        $flow = Flow::create([
            'key' => 'applicant-flow',
            'name' => 'Applicant Flow',
            'owner_scope' => 'global',
            'status' => FlowStatus::Active,
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'visibility_mode' => VisibilityMode::Always,
            'fields' => [
                ['key' => 'name', 'type' => 'text', 'required' => true],
            ],
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'consent',
            'name' => 'Consent',
            'position' => 1,
            'visibility_mode' => VisibilityMode::Always,
            'fields' => [
                ['key' => 'agreed', 'type' => 'boolean', 'required' => true],
            ],
        ]);

        $response = $this->manager->startFlow(
            flow: $flow,
            accountId: $this->accountId,
            initiatedByType: ActorType::Applicant,
        );

        $this->manager->submitStep($response, 'personal-info', ['name' => 'Jane Doe']);
        $response->refresh();

        $this->manager->submitStep($response, 'consent', ['agreed' => true]);
        $response->refresh();

        expect($this->manager->areAllStepsCompleted($response))->toBeTrue();

        $this->manager->complete($response, null, ActorType::Applicant);
        $response->refresh();

        expect($response->status)->toBe(ResponseStatus::Completed);
    });

    it('completes a customer-starts-applicant-finishes flow', function (): void {
        $flow = Flow::create([
            'key' => 'handoff-flow',
            'name' => 'Handoff Flow',
            'owner_scope' => 'global',
            'status' => FlowStatus::Active,
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'employer-info',
            'name' => 'Employer Information',
            'position' => 0,
            'visibility_mode' => VisibilityMode::CustomerOnly,
            'fields' => [
                ['key' => 'company', 'type' => 'text', 'required' => true],
            ],
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'applicant-info',
            'name' => 'Applicant Information',
            'position' => 1,
            'visibility_mode' => VisibilityMode::ApplicantOnly,
            'fields' => [
                ['key' => 'ssn', 'type' => 'text', 'required' => true],
            ],
        ]);

        $response = $this->manager->startFlow(
            flow: $flow,
            accountId: $this->accountId,
            initiatedByType: ActorType::Customer,
            initiatedById: 'customer-user-1',
        );

        $this->manager->submitStep($response, 'employer-info', ['company' => 'Acme Corp']);
        $response->refresh();

        $this->manager->handOff($response, 'applicant@example.com');
        $response->refresh();

        expect($response->status)->toBe(ResponseStatus::AwaitingApplicant);

        $this->manager->resume($response);
        $response->refresh();

        $this->manager->submitStep($response, 'applicant-info', ['ssn' => '123456789']);
        $response->refresh();

        $this->manager->complete($response, 'applicant-user-1', ActorType::Applicant);
        $response->refresh();

        expect($response->status)->toBe(ResponseStatus::Completed)
            ->and($response->initiated_by)->toBe('customer-user-1')
            ->and($response->initiated_by_type)->toBe(ActorType::Customer)
            ->and($response->completed_by)->toBe('applicant-user-1')
            ->and($response->completed_by_type)->toBe(ActorType::Applicant);
    });

    it('completes a flow with tenant custom steps', function (): void {
        $flow = Flow::create([
            'key' => 'customizable-flow',
            'name' => 'Customizable Flow',
            'owner_scope' => 'global',
            'status' => FlowStatus::Active,
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'standard-step',
            'name' => 'Standard Step',
            'position' => 0,
            'fields' => [
                ['key' => 'field1', 'type' => 'text', 'required' => true],
            ],
        ]);

        $slot = FlowSlot::create([
            'flow_id' => $flow->id,
            'key' => 'custom-slot',
            'name' => 'Custom Slot',
            'position' => 1,
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'final-step',
            'name' => 'Final Step',
            'position' => 2,
            'fields' => [
                ['key' => 'field3', 'type' => 'text', 'required' => true],
            ],
        ]);

        $template = FormTemplate::create([
            'account_id' => $this->accountId,
            'flow_id' => $flow->id,
            'name' => 'Custom Template',
            'status' => FlowStatus::Active,
        ]);

        FormTemplateStep::create([
            'form_template_id' => $template->id,
            'flow_slot_id' => $slot->id,
            'key' => 'custom-step',
            'name' => 'Tenant Custom Step',
            'position_in_slot' => 0,
            'fields' => [
                ['key' => 'custom_field', 'type' => 'text', 'required' => true],
            ],
        ]);

        $response = $this->manager->startFlow(
            flow: $flow,
            accountId: $this->accountId,
            initiatedByType: ActorType::Customer,
            template: $template,
        );

        $steps = $this->manager->getSteps($flow, $template);

        expect($steps)->toHaveCount(3)
            ->and($steps[0]->key)->toBe('standard-step')
            ->and($steps[1]->key)->toBe('custom-step')
            ->and($steps[1]->isFromTemplate())->toBeTrue()
            ->and($steps[2]->key)->toBe('final-step');

        $this->manager->submitStep($response, 'standard-step', ['field1' => 'value1']);
        $this->manager->submitStep($response, 'custom-step', ['custom_field' => 'custom_value']);
        $this->manager->submitStep($response, 'final-step', ['field3' => 'value3']);
        $response->refresh();

        expect($this->manager->areAllStepsCompleted($response))->toBeTrue();
    });
});
