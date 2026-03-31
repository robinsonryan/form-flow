<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Enums;

enum ResponseStatus: string
{
    case InProgress = 'in_progress';
    case AwaitingApplicant = 'awaiting_applicant';
    case Completed = 'completed';
    case Expired = 'expired';
    case Cancelled = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::InProgress => 'In Progress',
            self::AwaitingApplicant => 'Awaiting Applicant',
            self::Completed => 'Completed',
            self::Expired => 'Expired',
            self::Cancelled => 'Cancelled',
        };
    }

    public function isTerminal(): bool
    {
        return match ($this) {
            self::Completed, self::Expired, self::Cancelled => true,
            default => false,
        };
    }

    public function canTransitionTo(self $status): bool
    {
        if ($this->isTerminal()) {
            return false;
        }

        return match ($this) {
            self::InProgress => in_array($status, [
                self::AwaitingApplicant,
                self::Completed,
                self::Cancelled,
            ], true),
            self::AwaitingApplicant => in_array($status, [
                self::InProgress,
                self::Completed,
                self::Expired,
                self::Cancelled,
            ], true),
            default => false,
        };
    }
}
