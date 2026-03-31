<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Facades/FormFlow.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Facades\FormFlow
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-7d540ba21bf2122c271619d5894b817b5aa7844e3797fadaed31ace4f0f7fe82',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Facades\\FormFlow',
        'filename' => '/var/www/html/src/Facades/FormFlow.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Facades',
    'name' => 'RobinsonRyan\\FormFlow\\Facades\\FormFlow',
    'shortName' => 'FormFlow',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
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
 * @see \\RobinsonRyan\\FormFlow\\Services\\FlowManager
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 42,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Support\\Facades\\Facade',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'getFacadeAccessor' => 
      array (
        'name' => 'getFacadeAccessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 38,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'RobinsonRyan\\FormFlow\\Facades',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Facades\\FormFlow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Facades\\FormFlow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Facades\\FormFlow',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));