<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Traits;

use Illuminate\Support\Str;

trait HasConfigurableUuid
{
    public function getIncrementing(): bool
    {
        return false;
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    protected static function bootHasConfigurableUuid(): void
    {
        if (config('form-flow.database.native_uuids', false)) {
            return;
        }

        static::creating(function ($model): void {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
