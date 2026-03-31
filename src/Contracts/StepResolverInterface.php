<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Contracts;

use Illuminate\Support\Collection;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FormTemplate;

interface StepResolverInterface
{
    /**
     * Resolve all steps for a flow, including tenant customizations.
     *
     * @return Collection<int, ResolvedStep>
     */
    public function resolveSteps(Flow $flow, ?FormTemplate $template = null): Collection;

    /**
     * Resolve steps filtered by actor and context.
     *
     * @return Collection<int, ResolvedStep>
     */
    public function resolveStepsForActor(
        Flow $flow,
        StepFilterContext $context,
        ?FormTemplate $template = null,
    ): Collection;

    /**
     * Resolve a single step by key.
     */
    public function resolveStep(Flow $flow, string $stepKey, ?FormTemplate $template = null): ?ResolvedStep;
}
