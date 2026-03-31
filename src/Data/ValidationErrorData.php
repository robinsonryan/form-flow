<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Data;

use Spatie\LaravelData\Data;

final class ValidationErrorData extends Data
{
    public function __construct(
        public readonly string $path,
        public readonly string $code,
        public readonly string $message,
    ) {}
}
