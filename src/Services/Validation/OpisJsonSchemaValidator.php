<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Services\Validation;

use Opis\JsonSchema\Errors\ErrorFormatter as OpisErrorFormatter;
use Opis\JsonSchema\Helper;
use Opis\JsonSchema\Validator as OpisValidator;
use RobinsonRyan\FormFlow\Data\ValidationErrorData;
use RobinsonRyan\FormFlow\Data\ValidationResultData;
use Throwable;

final class OpisJsonSchemaValidator
{
    private OpisValidator $validator;

    private OpisErrorFormatter $formatter;

    public function __construct(?OpisValidator $validator = null, ?OpisErrorFormatter $formatter = null)
    {
        $this->validator = $validator ?? new OpisValidator;
        $this->formatter = $formatter ?? new OpisErrorFormatter;
    }

    /**
     * Validate data against a JSON Schema.
     *
     * @param  array<string, mixed>|object  $data
     * @param  array<string, mixed>|object  $schema
     */
    public function validate(mixed $data, mixed $schema): ValidationResultData
    {
        try {
            $schema = is_array($schema) ? Helper::toJSON($schema) : $schema;
            $data = is_array($data) ? Helper::toJSON($data) : $data;

            $report = $this->validator->validate($data, $schema);

            if ($report->isValid()) {
                return ValidationResultData::success();
            }

            $error = $report->hasError() ? $report->error() : null;

            if (! $error instanceof \Opis\JsonSchema\Errors\ValidationError) {
                return ValidationResultData::failure([
                    new ValidationErrorData('#', 'json_schema', 'Validation failed'),
                ]);
            }

            try {
                $formatted = $this->formatter->format($error);
            } catch (Throwable) {
                $formatted = null;
            }

            if (is_array($formatted) && $formatted !== []) {
                return ValidationResultData::failure($this->mapOpisFormattedErrors($formatted));
            }

            return ValidationResultData::failure([
                $this->extractErrorFromOpisError($error),
            ]);
        } catch (Throwable $e) {
            return ValidationResultData::failure(
                [new ValidationErrorData('#', 'exception', $e->getMessage())],
                $e->getMessage(),
            );
        }
    }

    private function extractErrorFromOpisError(mixed $error): ValidationErrorData
    {
        $path = '#';
        $code = 'json_schema';
        $message = 'Validation failed';

        if (! is_object($error)) {
            return new ValidationErrorData($path, $code, $message);
        }

        try {
            if (method_exists($error, 'dataPointer')) {
                $pointer = $error->dataPointer();
                $path = is_string($pointer) ? $pointer : '#';
            } elseif (method_exists($error, 'instance')) {
                $instance = $error->instance();
                if (is_string($instance)) {
                    $path = $instance;
                }
            }

            if (method_exists($error, 'keyword')) {
                $keyword = $error->keyword();
                $code = is_string($keyword) ? $keyword : 'json_schema';
            }

            if (method_exists($error, 'message')) {
                $msg = $error->message();
                $message = is_string($msg) ? $msg : $message;
            }
        } catch (Throwable) {
            // Use defaults
        }

        return new ValidationErrorData($path, $code, $message);
    }

    /**
     * Map Opis formatted errors to ValidationErrorData DTOs.
     *
     * @param  array<int, mixed>  $errors
     * @return array<int, ValidationErrorData>
     */
    private function mapOpisFormattedErrors(array $errors): array
    {
        $mapped = [];

        foreach ($errors as $err) {
            if (! is_array($err)) {
                $mapped[] = new ValidationErrorData('#', 'json_schema', $this->safeJsonEncode($err));

                continue;
            }

            if (isset($err['errors']) && is_array($err['errors'])) {
                $mapped = array_merge($mapped, $this->mapOpisFormattedErrors($err['errors']));

                continue;
            }

            $path = $err['pointer'] ?? $err['dataPointer'] ?? $err['instancePointer'] ?? ($err['instance'] ?? '#');
            $code = $err['keyword'] ?? $err['code'] ?? 'json_schema';
            $message = $err['message'] ?? $this->safeJsonEncode($err);

            $mapped[] = new ValidationErrorData((string) $path, (string) $code, (string) $message);
        }

        return $mapped;
    }

    private function safeJsonEncode(mixed $value): string
    {
        try {
            return json_encode($value, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE);
        } catch (Throwable) {
            if (is_scalar($value)) {
                return (string) $value;
            }

            return var_export($value, true);
        }
    }
}
