<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Facades;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use RobinsonRyan\FormFlow\Contracts\FlowManagerInterface;
use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\StepFilterContext;
use RobinsonRyan\FormFlow\Data\ValidationResultData;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowResponse;
use RobinsonRyan\FormFlow\Models\FormTemplate;

/**
 * @method static Flow|null getFlow(string $flowKey, ?string $accountId = null)
 * @method static FormTemplate|null getTemplate(Flow $flow, string $accountId)
 * @method static Collection<int, ResolvedStep> getSteps(Flow $flow, ?FormTemplate $template = null)
 * @method static Collection<int, ResolvedStep> getStepsForActor(Flow $flow, StepFilterContext $context, ?FormTemplate $template = null)
 * @method static FlowResponse startFlow(Flow $flow, string $accountId, ActorType $initiatedByType, ?string $initiatedById = null, ?FormTemplate $template = null, array<string, mixed> $initialData = [])
 * @method static ValidationResultData validateStep(Flow $flow, string $stepKey, array<string, mixed> $data, ?FormTemplate $template = null)
 * @method static ValidationResultData submitStep(FlowResponse $response, string $stepKey, array<string, mixed> $data)
 * @method static bool handOff(FlowResponse $response, string $applicantEmail)
 * @method static bool resume(FlowResponse $response)
 * @method static bool complete(FlowResponse $response, ?string $completedById = null, ?ActorType $completedByType = null)
 * @method static bool cancel(FlowResponse $response)
 * @method static bool areAllStepsCompleted(FlowResponse $response)
 * @method static ResolvedStep|null getNextStep(FlowResponse $response, StepFilterContext $context)
 * @method static array{total: int, completed: int, percentage: float} getProgress(FlowResponse $response, StepFilterContext $context)
 *
 * @see \RobinsonRyan\FormFlow\Services\FlowManager
 */
final class FormFlow extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return FlowManagerInterface::class;
    }
}
