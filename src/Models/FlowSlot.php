<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;
use RobinsonRyan\FormFlow\Traits\ConfiguresIdentifiers;

/**
 * @property string $id
 * @property string $flow_id
 * @property string $key
 * @property string $name
 * @property int $position
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Flow $flow
 * @property-read \Illuminate\Database\Eloquent\Collection<int, FormTemplateStep> $templateSteps
 */
final class FlowSlot extends Model
{
    use ConfiguresIdentifiers;

    protected $guarded = [];

    /**
     * @return array<string, mixed>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'position' => 'integer',
        ];
    }

    #[Override]
    public function getTable(): string
    {
        return config('form-flow.tables.flow_slots', 'flow_slots');
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
    public function templateSteps(): HasMany
    {
        return $this->hasMany(FormTemplateStep::class)->orderBy('position_in_slot');
    }
}
