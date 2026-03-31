<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Services\Validation\HybridStepValidator;
use RobinsonRyan\FormFlow\Services\Validation\OpisJsonSchemaValidator;

uses(RefreshDatabase::class);

describe('HybridStepValidator', function (): void {
    beforeEach(function (): void {
        $this->jsonSchemaValidator = new OpisJsonSchemaValidator;
        $this->validator = new HybridStepValidator($this->jsonSchemaValidator);
    });

    describe('Laravel validation', function (): void {
        it('validates required fields', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'personal-info',
                name: 'Personal Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'first_name', 'type' => 'text', 'required' => true],
                    ['key' => 'last_name', 'type' => 'text', 'required' => true],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $result = $this->validator->validate($step, []);

            expect($result->isInvalid())->toBeTrue()
                ->and($result->errors)->toHaveCount(2);
        });

        it('passes validation with valid data', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'personal-info',
                name: 'Personal Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'first_name', 'type' => 'text', 'required' => true],
                    ['key' => 'last_name', 'type' => 'text', 'required' => true],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $result = $this->validator->validate($step, [
                'first_name' => 'John',
                'last_name' => 'Doe',
            ]);

            expect($result->isValid())->toBeTrue()
                ->and($result->errors)->toBeEmpty();
        });

        it('validates email fields', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'contact-info',
                name: 'Contact Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'email', 'type' => 'email', 'required' => true],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $invalidResult = $this->validator->validate($step, ['email' => 'not-an-email']);
            $validResult = $this->validator->validate($step, ['email' => 'test@example.com']);

            expect($invalidResult->isInvalid())->toBeTrue()
                ->and($validResult->isValid())->toBeTrue();
        });

        it('validates integer fields', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'age-info',
                name: 'Age Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'age', 'type' => 'integer', 'required' => true],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $invalidResult = $this->validator->validate($step, ['age' => 'not-a-number']);
            $validResult = $this->validator->validate($step, ['age' => 25]);

            expect($invalidResult->isInvalid())->toBeTrue()
                ->and($validResult->isValid())->toBeTrue();
        });

        it('validates select field options', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'state-info',
                name: 'State Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
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
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $invalidResult = $this->validator->validate($step, ['state' => 'TX']);
            $validResult = $this->validator->validate($step, ['state' => 'CA']);

            expect($invalidResult->isInvalid())->toBeTrue()
                ->and($validResult->isValid())->toBeTrue();
        });

        it('applies explicit validation rules', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'password-info',
                name: 'Password Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'password', 'type' => 'text', 'required' => true],
                ],
                validationRules: [
                    'password' => ['min:8'],
                ],
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $invalidResult = $this->validator->validate($step, ['password' => 'short']);
            $validResult = $this->validator->validate($step, ['password' => 'longenoughpassword']);

            expect($invalidResult->isInvalid())->toBeTrue()
                ->and($validResult->isValid())->toBeTrue();
        });

        it('allows optional fields to be null', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'optional-info',
                name: 'Optional Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'nickname', 'type' => 'text', 'required' => false],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $result = $this->validator->validate($step, ['nickname' => null]);

            expect($result->isValid())->toBeTrue();
        });
    });

    describe('JSON Schema validation', function (): void {
        it('validates with JSON Schema when provided', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'address-info',
                name: 'Address Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [],
                validationRules: null,
                validationSchema: [
                    'type' => 'object',
                    'properties' => [
                        'street' => ['type' => 'string'],
                        'city' => ['type' => 'string'],
                        'zip' => ['type' => 'string', 'pattern' => '^\d{5}$'],
                    ],
                    'required' => ['street', 'city', 'zip'],
                ],
                uiSchema: null,
                source: 'flow',
            );

            $invalidResult = $this->validator->validate($step, [
                'street' => '123 Main St',
                'city' => 'Anytown',
                'zip' => 'invalid',
            ]);

            $validResult = $this->validator->validate($step, [
                'street' => '123 Main St',
                'city' => 'Anytown',
                'zip' => '12345',
            ]);

            expect($invalidResult->isInvalid())->toBeTrue()
                ->and($validResult->isValid())->toBeTrue();
        });

        it('runs Laravel validation before JSON Schema', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'mixed-info',
                name: 'Mixed Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'name', 'type' => 'text', 'required' => true],
                ],
                validationRules: null,
                validationSchema: [
                    'type' => 'object',
                    'properties' => [
                        'name' => ['type' => 'string', 'minLength' => 5],
                    ],
                ],
                uiSchema: null,
                source: 'flow',
            );

            $result = $this->validator->validate($step, []);

            expect($result->isInvalid())->toBeTrue()
                ->and($result->errors[0]->code)->toBe('laravel_validation');
        });
    });

    describe('error formatting', function (): void {
        it('converts validation result to Laravel-style messages', function (): void {
            $step = new ResolvedStep(
                id: 'step-1',
                key: 'personal-info',
                name: 'Personal Information',
                position: 0,
                visibilityMode: VisibilityMode::Always,
                visibilityConditions: null,
                fields: [
                    ['key' => 'first_name', 'type' => 'text', 'required' => true],
                    ['key' => 'email', 'type' => 'email', 'required' => true],
                ],
                validationRules: null,
                validationSchema: null,
                uiSchema: null,
                source: 'flow',
            );

            $result = $this->validator->validate($step, []);
            $messages = $result->toValidationMessages();

            expect($messages)->toHaveKey('first_name')
                ->and($messages)->toHaveKey('email')
                ->and($messages['first_name'])->toBeArray()
                ->and($messages['email'])->toBeArray();
        });
    });
});
