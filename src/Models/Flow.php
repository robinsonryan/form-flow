<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;
use RobinsonRyan\FormFlow\Enums\FlowStatus;
use RobinsonRyan\FormFlow\Enums\OwnerScope;
use RobinsonRyan\FormFlow\Traits\HasConfigurableUuid;

/**
 * @property string $id
 * @property string $key
 * @property string $name
 * @property string|null $description
 * @property OwnerScope $owner_scope
 * @property string|null $account_id
 * @property FlowStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FlowStep> $steps
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FlowSlot> $slots
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FormTemplate> $templates
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FlowResponse> $responses
 */
final class Flow extends Model
{
    use HasConfigurableUuid;
    use SoftDeletes;

    protected $guarded = [];

    /**
     * @return array<string, mixed>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'owner_scope' => OwnerScope::class,
            'status' => FlowStatus::class,
        ];
    }

    #[Override]
    public function getTable(): string
    {
        return config('form-flow.tables.flows', 'flows');
    }

    /**
     * @return HasMany<FlowStep, $this>
     */
    public function steps(): HasMany
    {
        return $this->hasMany(FlowStep::class)->orderBy('position');
    }

    /**
     * @return HasMany<FlowSlot, $this>
     */
    public function slots(): HasMany
    {
        return $this->hasMany(FlowSlot::class)->orderBy('position');
    }

    /**
     * @return HasMany<FormTemplate, $this>
     */
    public function templates(): HasMany
    {
        return $this->hasMany(FormTemplate::class);
    }

    /**
     * @return HasMany<FlowResponse, $this>
     */
    public function responses(): HasMany
    {
        return $this->hasMany(FlowResponse::class);
    }

    public function isGlobal(): bool
    {
        return $this->owner_scope === OwnerScope::Global;
    }

    public function isTenant(): bool
    {
        return $this->owner_scope === OwnerScope::Tenant;
    }

    public function isActive(): bool
    {
        return $this->status === FlowStatus::Active;
    }

    public function isDraft(): bool
    {
        return $this->status === FlowStatus::Draft;
    }

    public function activate(): bool
    {
        if ($this->status === FlowStatus::Active) {
            return true;
        }

        $this->status = FlowStatus::Active;

        return $this->save();
    }

    public function archive(): bool
    {
        if ($this->status === FlowStatus::Archived) {
            return true;
        }

        $this->status = FlowStatus::Archived;

        return $this->save();
    }
}
