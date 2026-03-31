<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Contracts;

use Illuminate\Support\Collection;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Data\ValidationResultData;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowResponse;
use RobinsonRyan\FormFlow\Models\FormTemplate;

interface FlowManagerInterface
{
    /**
     * Get a flow by key, optionally with tenant-specific template.
     */
    public function getFlow(string $flowKey, ?string $accountId = null): ?Flow;

    /**
     * Get the form template for a tenant and flow.
     */
    public function getTemplate(Flow $flow, string $accountId): ?FormTemplate;

    /**
     * Get all steps for a flow, including tenant customizations.
     *
     * @return Collection<int, ResolvedStep>
     */
    public function getSteps(Flow $flow, ?FormTemplate $template = null): Collection;

    /**
     * Get steps filtered for a specific actor.
     *
     * @return Collection<int, ResolvedStep>
     */
    public function getStepsForActor(
        Flow $flow,
        StepFilterContext $context,
        ?FormTemplate $template = null,
    ): Collection;

    /**
     * Start a new flow response.
     *
     * @param  array<string, mixed>  $initialData
     */
    public function startFlow(
        Flow $flow,
        string $accountId,
        ActorType $initiatedByType,
        ?string $initiatedById = null,
        ?FormTemplate $template = null,
        array $initialData = [],
    ): FlowResponse;

    /**
     * Validate step data.
     *
     * @param  array<string, mixed>  $data
     */
    public function validateStep(
        Flow $flow,
        string $stepKey,
        array $data,
        ?FormTemplate $template = null,
    ): ValidationResultData;

    /**
     * Submit step data.
     *
     * @param  array<string, mixed>  $data
     */
    public function submitStep(
        FlowResponse $response,
        string $stepKey,
        array $data,
    ): ValidationResultData;

    /**
     * Hand off a flow response to an applicant.
     */
    public function handOff(FlowResponse $response, string $applicantEmail): bool;

    /**
     * Resume a flow response that was handed off.
     */
    public function resume(FlowResponse $response): bool;

    /**
     * Complete a flow response.
     */
    public function complete(
        FlowResponse $response,
        ?string $completedById = null,
        ?ActorType $completedByType = null,
    ): bool;

    /**
     * Cancel a flow response.
     */
    public function cancel(FlowResponse $response): bool;
}
