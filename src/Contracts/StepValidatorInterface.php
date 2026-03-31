<?php

declare(strict_types=1);

namespace RobinsonRyan\FormFlow\Contracts;

use RobinsonRyan\FormFlow\Data\ResolvedStep;
use RobinsonRyan\FormFlow\Data\ValidationResultData;

interface StepValidatorInterface
{
    /**
     * Validate data against a step's validation rules.
     *
     * @param  array<string, mixed>  $data
     */
    public function validate(ResolvedStep $step, array $data): ValidationResultData;
}
