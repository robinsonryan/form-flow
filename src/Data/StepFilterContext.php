<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Data;

use RobinsonRyan\FormFlow\Enums\ActorType;
use Spatie\LaravelData\Data;

final class StepFilterContext extends Data
{
    public function __construct(
        public readonly ActorType $actorType,
        /** @var array<string, mixed> */
        public readonly array $contextData = [],
    ) {}

    public function isCustomer(): bool
    {
        return $this->actorType === ActorType::Customer;
    }

    public function isApplicant(): bool
    {
        return $this->actorType === ActorType::Applicant;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        return $this->contextData[$key] ?? $default;
    }
}
