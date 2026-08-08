<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Override;
use RobinsonRyan\FormFlow\Enums\ActorType;
use RobinsonRyan\FormFlow\Enums\ResponseStatus;
use RobinsonRyan\FormFlow\Traits\ConfiguresIdentifiers;

/**
 * @property string $id
 * @property string $account_id
 * @property string $flow_id
 * @property string|null $form_template_id
 * @property string|null $subject_type
 * @property string|null $subject_id
 * @property string|null $initiated_by
 * @property ActorType|null $initiated_by_type
 * @property string|null $completed_by
 * @property ActorType|null $completed_by_type
 * @property array<string, mixed>|null $responses
 * @property array<string, mixed>|null $step_progress
 * @property ResponseStatus $status
 * @property \Illuminate\Support\Carbon|null $submitted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read Flow $flow
 * @property-read FormTemplate|null $template
 * @property-read Model|null $subject
 */
final class FlowResponse extends Model
{
    use ConfiguresIdentifiers;
    use SoftDeletes;

    protected $guarded = [];

    /**
     * @return array<string, mixed>
     */
    #[Override]
    protected function casts(): array
    {
        return [
            'initiated_by_type' => ActorType::class,
            'completed_by_type' => ActorType::class,
            'responses' => 'array',
            'step_progress' => 'array',
            'status' => ResponseStatus::class,
            'submitted_at' => 'datetime',
        ];
    }

    #[Override]
    public function getTable(): string
    {
        return config('form-flow.tables.flow_responses', 'flow_responses');
    }

    /**
     * @return BelongsTo<Flow, $this>
     */
    public function flow(): BelongsTo
    {
        return $this->belongsTo(Flow::class);
    }

    /**
     * @return BelongsTo<FormTemplate, $this>
     */
    public function template(): BelongsTo
    {
        return $this->belongsTo(FormTemplate::class, 'form_template_id');
    }

    /**
     * @return MorphTo<Model, $this>
     */
    public function subject(): MorphTo
    {
        return $this->morphTo();
    }

    public function isInProgress(): bool
    {
        return $this->status === ResponseStatus::InProgress;
    }

    public function isAwaitingApplicant(): bool
    {
        return $this->status === ResponseStatus::AwaitingApplicant;
    }

    public function isCompleted(): bool
    {
        return $this->status === ResponseStatus::Completed;
    }

    public function isExpired(): bool
    {
        return $this->status === ResponseStatus::Expired;
    }

    public function isCancelled(): bool
    {
        return $this->status === ResponseStatus::Cancelled;
    }

    public function isTerminal(): bool
    {
        return $this->status->isTerminal();
    }

    public function canTransitionTo(ResponseStatus $status): bool
    {
        return $this->status->canTransitionTo($status);
    }

    /**
     * @param  array<string, mixed>  $data
     */
    public function setStepResponse(string $stepKey, array $data): void
    {
        $responses = $this->responses ?? [];
        $responses[$stepKey] = $data;
        $this->responses = $responses;
    }

    /**
     * @return array<string, mixed>
     */
    public function getStepResponse(string $stepKey): array
    {
        return $this->responses[$stepKey] ?? [];
    }

    public function markStepCompleted(string $stepKey): void
    {
        $progress = $this->step_progress ?? [];
        $progress[$stepKey] = [
            'completed' => true,
            'completed_at' => now()->toIso8601String(),
        ];
        $this->step_progress = $progress;
    }

    public function isStepCompleted(string $stepKey): bool
    {
        return ($this->step_progress[$stepKey]['completed'] ?? false) === true;
    }

    /**
     * @return array<int, string>
     */
    public function getCompletedStepKeys(): array
    {
        if ($this->step_progress === null) {
            return [];
        }

        return array_keys(array_filter(
            $this->step_progress,
            fn (array $progress): bool => ($progress['completed'] ?? false) === true,
        ));
    }

    public function handOffToApplicant(): bool
    {
        if (! $this->canTransitionTo(ResponseStatus::AwaitingApplicant)) {
            return false;
        }

        $this->status = ResponseStatus::AwaitingApplicant;

        return $this->save();
    }

    public function resumeByApplicant(): bool
    {
        if ($this->status !== ResponseStatus::AwaitingApplicant) {
            return false;
        }

        $this->status = ResponseStatus::InProgress;

        return $this->save();
    }

    public function complete(?string $completedBy = null, ?ActorType $completedByType = null): bool
    {
        if (! $this->canTransitionTo(ResponseStatus::Completed)) {
            return false;
        }

        $this->status = ResponseStatus::Completed;
        $this->submitted_at = now();
        $this->completed_by = $completedBy;
        $this->completed_by_type = $completedByType;

        return $this->save();
    }

    public function cancel(): bool
    {
        if (! $this->canTransitionTo(ResponseStatus::Cancelled)) {
            return false;
        }

        $this->status = ResponseStatus::Cancelled;

        return $this->save();
    }

    public function expire(): bool
    {
        if (! $this->canTransitionTo(ResponseStatus::Expired)) {
            return false;
        }

        $this->status = ResponseStatus::Expired;

        return $this->save();
    }
}
