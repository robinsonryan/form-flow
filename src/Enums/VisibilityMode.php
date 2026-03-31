<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Enums;

enum VisibilityMode: string
{
    case Always = 'always';
    case CustomerOnly = 'customer_only';
    case ApplicantOnly = 'applicant_only';
    case Conditional = 'conditional';

    /**
     * Check if this visibility mode is visible for the given actor type.
     */
    public function isVisibleFor(ActorType $actorType): bool
    {
        return match ($this) {
            self::Always => true,
            self::CustomerOnly => $actorType === ActorType::Customer,
            self::ApplicantOnly => $actorType === ActorType::Applicant,
            self::Conditional => true,
        };
    }

    public function label(): string
    {
        return match ($this) {
            self::Always => 'Always Visible',
            self::CustomerOnly => 'Customer Only',
            self::ApplicantOnly => 'Applicant Only',
            self::Conditional => 'Conditional',
        };
    }
}
