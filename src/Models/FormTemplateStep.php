<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Traits\HasConfigurableUuid;

/**
 * @property string $id
 * @property string $form_template_id
 * @property string $flow_slot_id
 * @property string $key
 * @property string $name
 * @property int $position_in_slot
 * @property VisibilityMode $visibility_mode
 * @property array<string, mixed>|null $visibility_conditions
 * @property array<int, array<string, mixed>> $fields
 * @property array<string, mixed>|null $validation_rules
 * @property array<string, mixed>|null $validation_schema
 * @property array<string, mixed>|null $ui_schema
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read FormTemplate $template
 * @property-read FlowSlot $slot
 */
final class FormTemplateStep extends Model
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
            'position_in_slot' => 'integer',
            'visibility_mode' => VisibilityMode::class,
            'visibility_conditions' => 'array',
            'fields' => 'array',
            'validation_rules' => 'array',
            'validation_schema' => 'array',
            'ui_schema' => 'array',
        ];
    }

    #[Override]
    public function getTable(): string
    {
        return config('form-flow.tables.form_template_steps', 'form_template_steps');
    }

    /**
     * @return BelongsTo<FormTemplate, $this>
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(FormTemplate::class, 'form_template_id');
    }

    /**
     * @return BelongsTo<FlowSlot, $this>
     */
    public function slot(): BelongsTo
    {
        return $this->belongsTo(FlowSlot::class, 'flow_slot_id');
    }

    public function isVisibleFor(ActorType $actorType): bool
    {
        return $this->visibility_mode->isVisibleFor($actorType);
    }

    /**
     * @return array<string, array<int, string>>
     */
    public function getLaravelValidationRules(): array
    {
        $rules = [];

        foreach ($this->fields as $field) {
            $fieldKey = $field['key'] ?? null;
            if ($fieldKey === null) {
                continue;
            }

            $fieldRules = $this->buildFieldRules($field);
            if ($fieldRules !== []) {
                $rules[$fieldKey] = $fieldRules;
            }
        }

        if ($this->validation_rules !== null) {
            return array_merge($rules, $this->validation_rules);
        }

        return $rules;
    }

    /**
     * @param  array<string, mixed>  $field
     * @return array<int, string>
     */
    private function buildFieldRules(array $field): array
    {
        $rules = [];
        $type = $field['type'] ?? 'text';
        $required = $field['required'] ?? false;

        $rules[] = $required ? 'required' : 'nullable';

        $rules[] = match ($type) {
            'email' => 'email',
            'number', 'integer' => 'integer',
            'decimal', 'float' => 'numeric',
            'boolean', 'checkbox' => 'boolean',
            'date' => 'date',
            'datetime' => 'date',
            'url' => 'url',
            'phone' => 'string',
            'ssn' => 'string|size:9',
            default => 'string',
        };

        if (isset($field['min'])) {
            $rules[] = 'min:'.$field['min'];
        }

        if (isset($field['max'])) {
            $rules[] = 'max:'.$field['max'];
        }

        if (isset($field['options']) && is_array($field['options'])) {
            $values = array_column($field['options'], 'value');
            $rules[] = 'in:'.implode(',', $values);
        }

        return $rules;
    }
}
