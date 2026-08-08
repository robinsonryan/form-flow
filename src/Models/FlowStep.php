<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Traits\ConfiguresIdentifiers;

/**
 * @property string $id
 * @property string $flow_id
 * @property string $key
 * @property string $name
 * @property int $position
 * @property VisibilityMode $visibility_mode
 * @property array<string, mixed>|null $visibility_conditions
 * @property array<int, array<string, mixed>> $fields
 * @property array<string, mixed>|null $validation_rules
 * @property array<string, mixed>|null $validation_schema
 * @property array<string, mixed>|null $ui_schema
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Flow $flow
 */
final class FlowStep extends Model
{
    use ConfiguresIdentifiers;
    use SoftDeletes;

    protected $guarded = [];

    /** @var array<string, mixed> */
    protected $attributes = [
        'visibility_mode' => 'always',
    ];

    /**
     * @return array<string, mixed>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'position' => 'integer',
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
        return config('form-flow.tables.flow_steps', 'flow_steps');
    }

    /**
     * @return BelongsTo<Flow, $this>
     */
    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class);
    }

    public function isVisibleFor(ActorType $actorType): bool
    {
        return $this->visibility_mode->isVisibleFor($actorType);
    }

    public function isAlwaysVisible(): bool
    {
        return $this->visibility_mode === VisibilityMode::Always;
    }

    public function isCustomerOnly(): bool
    {
        return $this->visibility_mode === VisibilityMode::CustomerOnly;
    }

    public function isApplicantOnly(): bool
    {
        return $this->visibility_mode === VisibilityMode::ApplicantOnly;
    }

    public function isConditional(): bool
    {
        return $this->visibility_mode === VisibilityMode::Conditional;
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
