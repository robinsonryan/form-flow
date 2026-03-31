<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Services;

use Illuminate\Support\Collection;
use RobinsonRyan\FormFlow\Contracts\FlowManagerInterface;
use RobinsonRyan\FormFlow\Contracts\StepResolverInterface;
use RobinsonRyan\FormFlow\Contracts\StepValidatorInterface;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Data\ValidationResultData;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\FlowStatus;
use RobinsonRyan\FormFlow\Enums\ResponseStatus;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowResponse;
use RobinsonRyan\FormFlow\Models\FormTemplate;

final class FlowManager implements FlowManagerInterface
{
    public function __construct(
        private readonly StepResolverInterface $stepResolver,
        private readonly StepValidatorInterface $stepValidator,
    ) {}

    public function getFlow(string $flowKey, ?string $accountId = null): ?Flow
    {
        $query = Flow::query()
            ->where('key', $flowKey)
            ->where('status', FlowStatus::Active);

        if ($accountId !== null) {
            $query->where(function ($q) use ($accountId): void {
                $q->where('owner_scope', 'global')
                    ->orWhere(function ($q2) use ($accountId): void {
                        $q2->where('owner_scope', 'tenant')
                            ->where('account_id', $accountId);
                    });
            });
        } else {
            $query->where('owner_scope', 'global');
        }

        return $query->first();
    }

    public function getTemplate(Flow $flow, string $accountId): ?FormTemplate
    {
        return FormTemplate::query()
            ->where('flow_id', $flow->id)
            ->where('account_id', $accountId)
            ->where('status', FlowStatus::Active)
            ->first();
    }

    /**
     * @return Collection<int, ResolvedStep>
     */
    public function getSteps(Flow $flow, ?FormTemplate $template = null): Collection
    {
        return $this->stepResolver->resolveSteps($flow, $template);
    }

    /**
     * @return Collection<int, ResolvedStep>
     */
    public function getStepsForActor(
        Flow $flow,
        StepFilterContext $context,
        ?FormTemplate $template = null,
    ): Collection {
        return $this->stepResolver->resolveStepsForActor($flow, $context, $template);
    }

    /**
     * @param  array<string, mixed>  $initialData
     */
    public function startFlow(
        Flow $flow,
        string $accountId,
        ActorType $initiatedByType,
        ?string $initiatedById = null,
        ?FormTemplate $template = null,
        array $initialData = [],
    ): FlowResponse {
        return FlowResponse::create([
            'account_id' => $accountId,
            'flow_id' => $flow->id,
            'form_template_id' => $template?->id,
            'initiated_by' => $initiatedById,
            'initiated_by_type' => $initiatedByType,
            'responses' => $initialData,
            'step_progress' => [],
            'status' => ResponseStatus::InProgress,
        ]);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function validateStep(
        Flow $flow,
        string $stepKey,
        array $data,
        ?FormTemplate $template = null,
    ): ValidationResultData {
        $step = $this->stepResolver->resolveStep($flow, $stepKey, $template);

        if ($step === null) {
            return ValidationResultData::failure([], 'Step not found');
        }

        return $this->stepValidator->validate($step, $data);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function submitStep(
        FlowResponse $response,
        string $stepKey,
        array $data,
    ): ValidationResultData {
        if ($response->isTerminal()) {
            return ValidationResultData::failure([], 'Response is already completed or cancelled');
        }

        $template = $response->form_template_id !== null
            ? FormTemplate::find($response->form_template_id)
            : null;

        $result = $this->validateStep($response->flow, $stepKey, $data, $template);

        if ($result->isInvalid()) {
            return $result;
        }

        $response->setStepResponse($stepKey, $data);
        $response->markStepCompleted($stepKey);
        $response->save();

        return ValidationResultData::success();
    }

    public function handOff(FlowResponse $response, string $applicantEmail): bool
    {
        if (! $response->canTransitionTo(ResponseStatus::AwaitingApplicant)) {
            return false;
        }

        $responses = $response->responses ?? [];
        $responses['_handoff'] = [
            'email' => $applicantEmail,
            'handed_off_at' => now()->toIso8601String(),
        ];
        $response->responses = $responses;

        return $response->handOffToApplicant();
    }

    public function resume(FlowResponse $response): bool
    {
        return $response->resumeByApplicant();
    }

    public function complete(
        FlowResponse $response,
        ?string $completedById = null,
        ?ActorType $completedByType = null,
    ): bool {
        return $response->complete($completedById, $completedByType);
    }

    public function cancel(FlowResponse $response): bool
    {
        return $response->cancel();
    }

    /**
     * Check if all required steps are completed.
     */
    public function areAllStepsCompleted(FlowResponse $response): bool
    {
        $template = $response->form_template_id !== null
            ? FormTemplate::find($response->form_template_id)
            : null;

        $steps = $this->stepResolver->resolveSteps($response->flow, $template);
        $completedKeys = $response->getCompletedStepKeys();

        foreach ($steps as $step) {
            if (! in_array($step->key, $completedKeys, true)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Get the next incomplete step for a response.
     */
    public function getNextStep(FlowResponse $response, StepFilterContext $context): ?ResolvedStep
    {
        $template = $response->form_template_id !== null
            ? FormTemplate::find($response->form_template_id)
            : null;

        $steps = $this->stepResolver->resolveStepsForActor($response->flow, $context, $template);
        $completedKeys = $response->getCompletedStepKeys();

        foreach ($steps as $step) {
            if (! in_array($step->key, $completedKeys, true)) {
                return $step;
            }
        }

        return null;
    }

    /**
     * Get progress information for a response.
     *
     * @return array{total: int, completed: int, percentage: float}
     */
    public function getProgress(FlowResponse $response, StepFilterContext $context): array
    {
        $template = $response->form_template_id !== null
            ? FormTemplate::find($response->form_template_id)
            : null;

        $steps = $this->stepResolver->resolveStepsForActor($response->flow, $context, $template);
        $completedKeys = $response->getCompletedStepKeys();

        $total = $steps->count();
        $completed = 0;

        foreach ($steps as $step) {
            if (in_array($step->key, $completedKeys, true)) {
                $completed++;
            }
        }

        return [
            'total' => $total,
            'completed' => $completed,
            'percentage' => $total > 0 ? round(($completed / $total) * 100, 2) : 0.0,
        ];
    }
}
