<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Services;

use Illuminate\Support\Collection;
use RobinsonRyan\FormFlow\Contracts\StepResolverInterface;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Enums\VisibilityMode;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowSlot;
use RobinsonRyan\FormFlow\Models\FormTemplate;
use RobinsonRyan\FormFlow\Models\FormTemplateStep;

final class StepResolver implements StepResolverInterface
{
    /**
     * @return Collection<int, ResolvedStep>
     */
    public function resolveSteps(Flow $flow, ?FormTemplate $template = null): Collection
    {
        $steps = collect();
        $position = 0;

        $flowSteps = $flow->steps()->orderBy('position')->get();
        $slots = $flow->slots()->orderBy('position')->get()->keyBy('position');

        foreach ($flowSteps as $flowStep) {
            $stepPosition = $flowStep->position;

            $this->insertSlotsBeforePosition($steps, $slots, $stepPosition, $template, $position);

            $steps->push(ResolvedStep::fromFlowStep($flowStep));
            $position++;
        }

        $this->insertRemainingSlots($steps, $slots, $template, $position);

        return $steps->values();
    }

    /**
     * @return Collection<int, ResolvedStep>
     */
    public function resolveStepsForActor(
        Flow $flow,
        StepFilterContext $context,
        ?FormTemplate $template = null,
    ): Collection {
        return $this->resolveSteps($flow, $template)
            ->filter(fn (ResolvedStep $step): bool => $this->isStepVisibleForContext($step, $context))
            ->values();
    }

    public function resolveStep(Flow $flow, string $stepKey, ?FormTemplate $template = null): ?ResolvedStep
    {
        return $this->resolveSteps($flow, $template)
            ->first(fn (ResolvedStep $step): bool => $step->key === $stepKey);
    }

    private function isStepVisibleForContext(ResolvedStep $step, StepFilterContext $context): bool
    {
        return match ($step->visibilityMode) {
            VisibilityMode::Always => true,
            VisibilityMode::CustomerOnly => $context->isCustomer(),
            VisibilityMode::ApplicantOnly => $context->isApplicant(),
            VisibilityMode::Conditional => $this->evaluateConditionalVisibility($step, $context),
        };
    }

    private function evaluateConditionalVisibility(ResolvedStep $step, StepFilterContext $context): bool
    {
        if ($step->visibilityConditions === null || $step->visibilityConditions === []) {
            return true;
        }

        foreach ($step->visibilityConditions as $condition) {
            if (! $this->evaluateCondition($condition, $context)) {
                return false;
            }
        }

        return true;
    }

    /**
     * @param  array<string, mixed>  $condition
     */
    private function evaluateCondition(array $condition, StepFilterContext $context): bool
    {
        $field = $condition['field'] ?? null;
        $operator = $condition['operator'] ?? 'equals';
        $value = $condition['value'] ?? null;

        if ($field === null) {
            return true;
        }

        $contextValue = $context->get($field);

        return match ($operator) {
            'equals', '==' => $contextValue === $value,
            'not_equals', '!=' => $contextValue !== $value,
            'in' => is_array($value) && in_array($contextValue, $value, true),
            'not_in' => is_array($value) && ! in_array($contextValue, $value, true),
            'exists' => $contextValue !== null,
            'not_exists' => $contextValue === null,
            'greater_than', '>' => is_numeric($contextValue) && is_numeric($value) && $contextValue > $value,
            'less_than', '<' => is_numeric($contextValue) && is_numeric($value) && $contextValue < $value,
            default => true,
        };
    }

    /**
     * @param  Collection<int, ResolvedStep>  $steps
     * @param  Collection<int, FlowSlot>  $slots
     */
    private function insertSlotsBeforePosition(
        Collection $steps,
        Collection $slots,
        int $position,
        ?FormTemplate $template,
        int &$currentPosition,
    ): void {
        foreach ($slots as $slotPosition => $slot) {
            if ($slotPosition < $position) {
                $this->insertSlotSteps($steps, $slot, $template, $currentPosition);
                $slots->forget($slotPosition);
            }
        }
    }

    /**
     * @param  Collection<int, ResolvedStep>  $steps
     * @param  Collection<int, FlowSlot>  $slots
     */
    private function insertRemainingSlots(
        Collection $steps,
        Collection $slots,
        ?FormTemplate $template,
        int &$currentPosition,
    ): void {
        foreach ($slots as $slot) {
            $this->insertSlotSteps($steps, $slot, $template, $currentPosition);
        }
    }

    /**
     * @param  Collection<int, ResolvedStep>  $steps
     */
    private function insertSlotSteps(
        Collection $steps,
        FlowSlot $slot,
        ?FormTemplate $template,
        int &$currentPosition,
    ): void {
        if (! $template instanceof FormTemplate) {
            return;
        }

        $templateSteps = FormTemplateStep::query()
            ->where('form_template_id', $template->id)
            ->where('flow_slot_id', $slot->id)
            ->orderBy('position_in_slot')
            ->get();

        foreach ($templateSteps as $templateStep) {
            $steps->push(ResolvedStep::fromTemplateStep($templateStep, $currentPosition));
            $currentPosition++;
        }
    }
}
