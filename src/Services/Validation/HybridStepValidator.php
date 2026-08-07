<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Services\Validation;

use Illuminate\Support\Facades\Validator;
use RobinsonRyan\FormFlow\Contracts\StepValidatorInterface;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\ValidationErrorData;
use RobinsonRyan\FormFlow\Data\ValidationResultData;

final readonly class HybridStepValidator implements StepValidatorInterface
{
    public function __construct(
        private OpisJsonSchemaValidator $jsonSchemaValidator,
    ) {}

    /**
     * @param  array<string, mixed>  $data
     */
    public function validate(ResolvedStep $step, array $data): ValidationResultData
    {
        $laravelResult = $this->validateWithLaravel($step, $data);

        if ($laravelResult->isInvalid()) {
            return $laravelResult;
        }

        if ($step->validationSchema !== null && $step->validationSchema !== []) {
            return $this->validateWithJsonSchema($step, $data);
        }

        return ValidationResultData::success();
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function validateWithLaravel(ResolvedStep $step, array $data): ValidationResultData
    {
        $rules = $this->buildLaravelRules($step);

        if ($rules === []) {
            return ValidationResultData::success();
        }

        $validator = Validator::make($data, $rules);

        if ($validator->passes()) {
            return ValidationResultData::success();
        }

        $errors = [];
        foreach ($validator->errors()->toArray() as $field => $messages) {
            foreach ($messages as $message) {
                $errors[] = new ValidationErrorData(
                    path: '#/'.$field,
                    code: 'laravel_validation',
                    message: $message,
                );
            }
        }

        return ValidationResultData::failure($errors);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    private function validateWithJsonSchema(ResolvedStep $step, array $data): ValidationResultData
    {
        if ($step->validationSchema === null) {
            return ValidationResultData::success();
        }

        return $this->jsonSchemaValidator->validate($data, $step->validationSchema);
    }

    /**
     * @return array<string, array<int, string>>
     */
    private function buildLaravelRules(ResolvedStep $step): array
    {
        $rules = [];

        foreach ($step->fields as $field) {
            $fieldKey = $field['key'] ?? null;
            if ($fieldKey === null) {
                continue;
            }

            $fieldRules = $this->buildFieldRules($field);
            if ($fieldRules !== []) {
                $rules[$fieldKey] = $fieldRules;
            }
        }

        if ($step->validationRules !== null) {
            foreach ($step->validationRules as $key => $value) {
                if (is_string($value)) {
                    $rules[$key] = explode('|', $value);
                } elseif (is_array($value)) {
                    $rules[$key] = $value;
                }
            }
        }

        return $rules;
    }

    /**
     * @param  array<string, mixed>  $field
     * @return array<int, string>
     */
    private function buildFieldRules(array $field): array
    {
        $rules = [];
        $type = $field['type'] ?? 'text';
        $required = $field['required'] ?? false;

        $rules[] = $required ? 'required' : 'nullable';

        $rules[] = match ($type) {
            'email' => 'email',
            'number', 'integer' => 'integer',
            'decimal', 'float' => 'numeric',
            'boolean', 'checkbox' => 'boolean',
            'date' => 'date',
            'datetime' => 'date',
            'url' => 'url',
            'phone' => 'string',
            'ssn' => 'string',
            default => 'string',
        };

        if (isset($field['min'])) {
            $rules[] = 'min:'.$field['min'];
        }

        if (isset($field['max'])) {
            $rules[] = 'max:'.$field['max'];
        }

        if (isset($field['options']) && is_array($field['options'])) {
            $values = array_column($field['options'], 'value');
            if ($values !== []) {
                $rules[] = 'in:'.implode(',', $values);
            }
        }

        return $rules;
    }
}
