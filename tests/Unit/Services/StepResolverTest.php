<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowSlot;
use RobinsonRyan\FormFlow\Models\FlowStep;
use RobinsonRyan\FormFlow\Models\FormTemplate;
use RobinsonRyan\FormFlow\Models\FormTemplateStep;
use RobinsonRyan\FormFlow\Services\StepResolver;

uses(RefreshDatabase::class);

describe('StepResolver', function (): void {
    beforeEach(function (): void {
        $this->resolver = new StepResolver;

        $this->flow = Flow::create([
            'key' => 'background-check',
            'name' => 'Background Check',
            'owner_scope' => 'global',
            'status' => 'active',
        ]);
    });

    describe('resolveSteps', function (): void {
        it('returns all flow steps in order', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-2',
                'name' => 'Step 2',
                'position' => 1,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-1',
                'name' => 'Step 1',
                'position' => 0,
                'fields' => [],
            ]);

            $steps = $this->resolver->resolveSteps($this->flow);

            expect($steps)->toHaveCount(2)
                ->and($steps[0]->key)->toBe('step-1')
                ->and($steps[1]->key)->toBe('step-2');
        });

        it('returns empty collection when no steps exist', function (): void {
            $steps = $this->resolver->resolveSteps($this->flow);

            expect($steps)->toBeEmpty();
        });

        it('marks steps as from flow source', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'step-1',
                'name' => 'Step 1',
                'position' => 0,
                'fields' => [],
            ]);

            $steps = $this->resolver->resolveSteps($this->flow);

            expect($steps[0]->isFromFlow())->toBeTrue()
                ->and($steps[0]->isFromTemplate())->toBeFalse();
        });
    });

    describe('resolveStepsForActor', function (): void {
        it('filters steps by customer visibility', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'always-step',
                'name' => 'Always Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Always,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'customer-step',
                'name' => 'Customer Step',
                'position' => 1,
                'visibility_mode' => VisibilityMode::CustomerOnly,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'applicant-step',
                'name' => 'Applicant Step',
                'position' => 2,
                'visibility_mode' => VisibilityMode::ApplicantOnly,
                'fields' => [],
            ]);

            $context = new StepFilterContext(ActorType::Customer);
            $steps = $this->resolver->resolveStepsForActor($this->flow, $context);

            expect($steps)->toHaveCount(2)
                ->and($steps->pluck('key')->toArray())->toBe(['always-step', 'customer-step']);
        });

        it('filters steps by applicant visibility', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'always-step',
                'name' => 'Always Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Always,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'customer-step',
                'name' => 'Customer Step',
                'position' => 1,
                'visibility_mode' => VisibilityMode::CustomerOnly,
                'fields' => [],
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'applicant-step',
                'name' => 'Applicant Step',
                'position' => 2,
                'visibility_mode' => VisibilityMode::ApplicantOnly,
                'fields' => [],
            ]);

            $context = new StepFilterContext(ActorType::Applicant);
            $steps = $this->resolver->resolveStepsForActor($this->flow, $context);

            expect($steps)->toHaveCount(2)
                ->and($steps->pluck('key')->toArray())->toBe(['always-step', 'applicant-step']);
        });

        it('evaluates conditional visibility with context data', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'ssn-step',
                'name' => 'SSN Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Conditional,
                'visibility_conditions' => [
                    ['field' => 'country', 'operator' => 'equals', 'value' => 'US'],
                ],
                'fields' => [],
            ]);

            $usContext = new StepFilterContext(ActorType::Applicant, ['country' => 'US']);
            $ukContext = new StepFilterContext(ActorType::Applicant, ['country' => 'UK']);

            $usSteps = $this->resolver->resolveStepsForActor($this->flow, $usContext);
            $ukSteps = $this->resolver->resolveStepsForActor($this->flow, $ukContext);

            expect($usSteps)->toHaveCount(1)
                ->and($ukSteps)->toBeEmpty();
        });

        it('evaluates conditional visibility with in operator', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'north-america-step',
                'name' => 'North America Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Conditional,
                'visibility_conditions' => [
                    ['field' => 'country', 'operator' => 'in', 'value' => ['US', 'CA', 'MX']],
                ],
                'fields' => [],
            ]);

            $usContext = new StepFilterContext(ActorType::Applicant, ['country' => 'US']);
            $ukContext = new StepFilterContext(ActorType::Applicant, ['country' => 'UK']);

            $usSteps = $this->resolver->resolveStepsForActor($this->flow, $usContext);
            $ukSteps = $this->resolver->resolveStepsForActor($this->flow, $ukContext);

            expect($usSteps)->toHaveCount(1)
                ->and($ukSteps)->toBeEmpty();
        });

        it('evaluates conditional visibility with exists operator', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'has-prior-employment',
                'name' => 'Prior Employment Details',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Conditional,
                'visibility_conditions' => [
                    ['field' => 'has_prior_employment', 'operator' => 'exists'],
                ],
                'fields' => [],
            ]);

            $withContext = new StepFilterContext(ActorType::Applicant, ['has_prior_employment' => true]);
            $withoutContext = new StepFilterContext(ActorType::Applicant, []);

            $withSteps = $this->resolver->resolveStepsForActor($this->flow, $withContext);
            $withoutSteps = $this->resolver->resolveStepsForActor($this->flow, $withoutContext);

            expect($withSteps)->toHaveCount(1)
                ->and($withoutSteps)->toBeEmpty();
        });
    });

    describe('resolveStep', function (): void {
        it('returns a single step by key', function (): void {
            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'personal-info',
                'name' => 'Personal Information',
                'position' => 0,
                'fields' => [
                    ['key' => 'first_name', 'type' => 'text'],
                ],
            ]);

            $step = $this->resolver->resolveStep($this->flow, 'personal-info');

            expect($step)->not->toBeNull()
                ->and($step->key)->toBe('personal-info')
                ->and($step->fields)->toHaveCount(1);
        });

        it('returns null for non-existent step', function (): void {
            $step = $this->resolver->resolveStep($this->flow, 'non-existent');

            expect($step)->toBeNull();
        });
    });

    describe('template step insertion', function (): void {
        it('inserts template steps at slot positions', function (): void {
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
                'position' => 2,
                'fields' => [],
            ]);

            $slot = FlowSlot::create([
                'flow_id' => $this->flow->id,
                'key' => 'after-step-1',
                'name' => 'After Step 1',
                'position' => 1,
            ]);

            $template = FormTemplate::create([
                'account_id' => 'account-123',
                'flow_id' => $this->flow->id,
                'name' => 'Custom Template',
                'status' => 'active',
            ]);

            FormTemplateStep::create([
                'form_template_id' => $template->id,
                'flow_slot_id' => $slot->id,
                'key' => 'custom-step',
                'name' => 'Custom Step',
                'position_in_slot' => 0,
                'fields' => [],
            ]);

            $steps = $this->resolver->resolveSteps($this->flow, $template);

            expect($steps)->toHaveCount(3)
                ->and($steps[0]->key)->toBe('step-1')
                ->and($steps[1]->key)->toBe('custom-step')
                ->and($steps[1]->isFromTemplate())->toBeTrue()
                ->and($steps[2]->key)->toBe('step-2');
        });

        it('orders multiple template steps within a slot', function (): void {
            $slot = FlowSlot::create([
                'flow_id' => $this->flow->id,
                'key' => 'custom-slot',
                'name' => 'Custom Slot',
                'position' => 0,
            ]);

            FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'flow-step',
                'name' => 'Flow Step',
                'position' => 1,
                'fields' => [],
            ]);

            $template = FormTemplate::create([
                'account_id' => 'account-123',
                'flow_id' => $this->flow->id,
                'name' => 'Custom Template',
                'status' => 'active',
            ]);

            FormTemplateStep::create([
                'form_template_id' => $template->id,
                'flow_slot_id' => $slot->id,
                'key' => 'custom-step-2',
                'name' => 'Custom Step 2',
                'position_in_slot' => 1,
                'fields' => [],
            ]);

            FormTemplateStep::create([
                'form_template_id' => $template->id,
                'flow_slot_id' => $slot->id,
                'key' => 'custom-step-1',
                'name' => 'Custom Step 1',
                'position_in_slot' => 0,
                'fields' => [],
            ]);

            $steps = $this->resolver->resolveSteps($this->flow, $template);

            expect($steps)->toHaveCount(3)
                ->and($steps[0]->key)->toBe('custom-step-1')
                ->and($steps[1]->key)->toBe('custom-step-2')
                ->and($steps[2]->key)->toBe('flow-step');
        });

        it('filters template steps by visibility mode', function (): void {
            $slot = FlowSlot::create([
                'flow_id' => $this->flow->id,
                'key' => 'custom-slot',
                'name' => 'Custom Slot',
                'position' => 0,
            ]);

            $template = FormTemplate::create([
                'account_id' => 'account-123',
                'flow_id' => $this->flow->id,
                'name' => 'Custom Template',
                'status' => 'active',
            ]);

            FormTemplateStep::create([
                'form_template_id' => $template->id,
                'flow_slot_id' => $slot->id,
                'key' => 'customer-custom',
                'name' => 'Customer Custom Step',
                'position_in_slot' => 0,
                'visibility_mode' => VisibilityMode::CustomerOnly,
                'fields' => [],
            ]);

            FormTemplateStep::create([
                'form_template_id' => $template->id,
                'flow_slot_id' => $slot->id,
                'key' => 'applicant-custom',
                'name' => 'Applicant Custom Step',
                'position_in_slot' => 1,
                'visibility_mode' => VisibilityMode::ApplicantOnly,
                'fields' => [],
            ]);

            $customerContext = new StepFilterContext(ActorType::Customer);
            $applicantContext = new StepFilterContext(ActorType::Applicant);

            $customerSteps = $this->resolver->resolveStepsForActor($this->flow, $customerContext, $template);
            $applicantSteps = $this->resolver->resolveStepsForActor($this->flow, $applicantContext, $template);

            expect($customerSteps)->toHaveCount(1)
                ->and($customerSteps[0]->key)->toBe('customer-custom')
                ->and($applicantSteps)->toHaveCount(1)
                ->and($applicantSteps[0]->key)->toBe('applicant-custom');
        });
    });
});
