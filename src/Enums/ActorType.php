<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Enums;

enum ActorType: string
{
    case Customer = 'customer';
    case Applicant = 'applicant';

    public function label(): string
    {
        return match ($this) {
            self::Customer => 'Customer',
            self::Applicant => 'Applicant',
        };
    }
}
