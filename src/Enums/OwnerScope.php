<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Enums;

enum OwnerScope: string
{
    case Global = 'global';
    case Tenant = 'tenant';

    public function label(): string
    {
        return match ($this) {
            self::Global => 'Global',
            self::Tenant => 'Tenant',
        };
    }
}
