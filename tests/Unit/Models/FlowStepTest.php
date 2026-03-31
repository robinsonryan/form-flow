<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowStep;

uses(RefreshDatabase::class);

describe('FlowStep Model', function (): void {
    beforeEach(function (): void {
        $this->flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'draft',
        ]);
    });

    it('creates a flow step with uuid', function (): void {
        $step = FlowStep::create([
            'flow_id' => $this->flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'fields' => [
                ['key' => 'first_name', 'type' => 'text', 'required' => true],
                ['key' => 'last_name', 'type' => 'text', 'required' => true],
            ],
        ]);

        expect($step->id)->toBeString()
            ->and($step->id)->toHaveLength(36);
    });

    it('belongs to a flow', function (): void {
        $step = FlowStep::create([
            'flow_id' => $this->flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'fields' => [],
        ]);

        expect($step->flow->id)->toBe($this->flow->id);
    });

    it('casts visibility_mode to enum', function (): void {
        $step = FlowStep::create([
            'flow_id' => $this->flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'visibility_mode' => 'customer_only',
            'fields' => [],
        ]);

        expect($step->visibility_mode)->toBeInstanceOf(VisibilityMode::class)
            ->and($step->visibility_mode)->toBe(VisibilityMode::CustomerOnly);
    });

    it('defaults visibility_mode to always', function (): void {
        $step = FlowStep::create([
            'flow_id' => $this->flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'fields' => [],
        ]);

        expect($step->visibility_mode)->toBe(VisibilityMode::Always);
    });

    it('casts fields to array', function (): void {
        $fields = [
            ['key' => 'first_name', 'type' => 'text', 'required' => true],
            ['key' => 'email', 'type' => 'email', 'required' => true],
        ];

        $step = FlowStep::create([
            'flow_id' => $this->flow->id,
            'key' => 'personal-info',
            'name' => 'Personal Information',
            'position' => 0,
            'fields' => $fields,
        ]);

        expect($step->fields)->toBeArray()
            ->and($step->fields)->toHaveCount(2)
            ->and($step->fields[0]['key'])->toBe('first_name');
    });

    describe('visibility modes', function (): void {
        it('isVisibleFor returns true for always visibility with any actor', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'always-step',
                'name' => 'Always Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Always,
                'fields' => [],
            ]);

            expect($step->isVisibleFor(ActorType::Customer))->toBeTrue()
                ->and($step->isVisibleFor(ActorType::Applicant))->toBeTrue();
        });

        it('isVisibleFor returns true only for customer with customer_only visibility', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'customer-step',
                'name' => 'Customer Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::CustomerOnly,
                'fields' => [],
            ]);

            expect($step->isVisibleFor(ActorType::Customer))->toBeTrue()
                ->and($step->isVisibleFor(ActorType::Applicant))->toBeFalse();
        });

        it('isVisibleFor returns true only for applicant with applicant_only visibility', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'applicant-step',
                'name' => 'Applicant Step',
                'position' => 0,
                'visibility_mode' => VisibilityMode::ApplicantOnly,
                'fields' => [],
            ]);

            expect($step->isVisibleFor(ActorType::Customer))->toBeFalse()
                ->and($step->isVisibleFor(ActorType::Applicant))->toBeTrue();
        });

        it('provides helper methods for visibility mode checks', function (): void {
            $alwaysStep = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'always',
                'name' => 'Always',
                'position' => 0,
                'visibility_mode' => VisibilityMode::Always,
                'fields' => [],
            ]);

            $customerStep = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'customer',
                'name' => 'Customer',
                'position' => 1,
                'visibility_mode' => VisibilityMode::CustomerOnly,
                'fields' => [],
            ]);

            $applicantStep = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'applicant',
                'name' => 'Applicant',
                'position' => 2,
                'visibility_mode' => VisibilityMode::ApplicantOnly,
                'fields' => [],
            ]);

            $conditionalStep = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'conditional',
                'name' => 'Conditional',
                'position' => 3,
                'visibility_mode' => VisibilityMode::Conditional,
                'fields' => [],
            ]);

            expect($alwaysStep->isAlwaysVisible())->toBeTrue()
                ->and($customerStep->isCustomerOnly())->toBeTrue()
                ->and($applicantStep->isApplicantOnly())->toBeTrue()
                ->and($conditionalStep->isConditional())->toBeTrue();
        });
    });

    describe('validation rules generation', function (): void {
        it('generates required rule for required fields', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    ['key' => 'name', 'type' => 'text', 'required' => true],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules)->toHaveKey('name')
                ->and($rules['name'])->toContain('required');
        });

        it('generates nullable rule for optional fields', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    ['key' => 'nickname', 'type' => 'text', 'required' => false],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules)->toHaveKey('nickname')
                ->and($rules['nickname'])->toContain('nullable');
        });

        it('generates email rule for email fields', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    ['key' => 'email', 'type' => 'email', 'required' => true],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules)->toHaveKey('email')
                ->and($rules['email'])->toContain('email');
        });

        it('generates integer rule for number fields', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    ['key' => 'age', 'type' => 'integer', 'required' => true],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules)->toHaveKey('age')
                ->and($rules['age'])->toContain('integer');
        });

        it('generates in rule for select fields with options', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    [
                        'key' => 'state',
                        'type' => 'select',
                        'required' => true,
                        'options' => [
                            ['value' => 'CA', 'label' => 'California'],
                            ['value' => 'NY', 'label' => 'New York'],
                        ],
                    ],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules)->toHaveKey('state')
                ->and($rules['state'])->toContain('in:CA,NY');
        });

        it('merges explicit validation_rules', function (): void {
            $step = FlowStep::create([
                'flow_id' => $this->flow->id,
                'key' => 'test-step',
                'name' => 'Test Step',
                'position' => 0,
                'fields' => [
                    ['key' => 'email', 'type' => 'email', 'required' => true],
                ],
                'validation_rules' => [
                    'email' => ['unique:users,email'],
                ],
            ]);

            $rules = $step->getLaravelValidationRules();

            expect($rules['email'])->toContain('unique:users,email');
        });
    });
});
