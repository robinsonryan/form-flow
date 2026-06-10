<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;
use RobinsonRyan\FormFlow\Enums\FlowStatus;
use RobinsonRyan\FormFlow\Traits\HasConfigurableUuid;

/**
 * @property string $id
 * @property string $account_id
 * @property string $flow_id
 * @property string $name
 * @property string|null $description
 * @property FlowStatus $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Flow $flow
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FormTemplateStep> $steps
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FlowResponse> $responses
 */
final class FormTemplate extends Model
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
            'status' => FlowStatus::class,
        ];
    }

    #[Override]
    public function getTable(): string
    {
        return config('form-flow.tables.form_templates', 'form_templates');
    }

    /**
     * @return BelongsTo<Flow, $this>
     */
    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class);
    }

    /**
     * @return HasMany<FormTemplateStep, $this>
     */
    public function steps(): HasMany
    {
        return $this->hasMany(FormTemplateStep::class)->orderBy('position_in_slot');
    }

    /**
     * @return HasMany<FlowResponse, $this>
     */
    public function responses(): HasMany
    {
        return $this->hasMany(FlowResponse::class);
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
}
