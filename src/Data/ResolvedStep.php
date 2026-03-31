<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Data;

use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Models\FlowStep;
use RobinsonRyan\FormFlow\Models\FormTemplateStep;
use Spatie\LaravelData\Data;

final class ResolvedStep extends Data
{
    public function __construct(
        public readonly string $id,
        public readonly string $key,
        public readonly string $name,
        public readonly int $position,
        public readonly VisibilityMode $visibilityMode,
        /** @var array<string, mixed>|null */
        public readonly ?array $visibilityConditions,
        /** @var array<int, array<string, mixed>> */
        public readonly array $fields,
        /** @var array<string, mixed>|null */
        public readonly ?array $validationRules,
        /** @var array<string, mixed>|null */
        public readonly ?array $validationSchema,
        /** @var array<string, mixed>|null */
        public readonly ?array $uiSchema,
        public readonly string $source,
        public readonly ?string $slotKey = null,
    ) {}

    public static function fromFlowStep(FlowStep $step): self
    {
        return new self(
            id: $step->id,
            key: $step->key,
            name: $step->name,
            position: $step->position,
            visibilityMode: $step->visibility_mode,
            visibilityConditions: $step->visibility_conditions,
            fields: $step->fields,
            validationRules: $step->validation_rules,
            validationSchema: $step->validation_schema,
            uiSchema: $step->ui_schema,
            source: 'flow',
        );
    }

    public static function fromTemplateStep(FormTemplateStep $step, int $globalPosition): self
    {
        return new self(
            id: $step->id,
            key: $step->key,
            name: $step->name,
            position: $globalPosition,
            visibilityMode: $step->visibility_mode,
            visibilityConditions: $step->visibility_conditions,
            fields: $step->fields,
            validationRules: $step->validation_rules,
            validationSchema: $step->validation_schema,
            uiSchema: $step->ui_schema,
            source: 'template',
            slotKey: $step->slot->key,
        );
    }

    public function isFromFlow(): bool
    {
        return $this->source === 'flow';
    }

    public function isFromTemplate(): bool
    {
        return $this->source === 'template';
    }
}
