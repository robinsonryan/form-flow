<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Data;

use Spatie\LaravelData\Data;

final class ValidationResultData extends Data
{
    /**
     * @param  array<int, ValidationErrorData>  $errors
     */
    public function __construct(
        public readonly bool $valid,
        public readonly array $errors = [],
        public readonly ?string $message = null,
    ) {}

    public static function success(?string $message = null): self
    {
        return new self(valid: true, errors: [], message: $message);
    }

    /**
     * @param  array<int, ValidationErrorData>  $errors
     */
    public static function failure(array $errors, ?string $message = null): self
    {
        return new self(valid: false, errors: $errors, message: $message);
    }

    public function isValid(): bool
    {
        return $this->valid;
    }

    public function isInvalid(): bool
    {
        return ! $this->valid;
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function toValidationMessages(): array
    {
        $messages = [];

        foreach ($this->errors as $error) {
            $field = $this->pathToField($error->path);
            if (! isset($messages[$field])) {
                $messages[$field] = [];
            }
            $messages[$field][] = $error->message;
        }

        return $messages;
    }

    private function pathToField(string $path): string
    {
        $path = ltrim($path, '#/');

        return str_replace('/', '.', $path);
    }
}
