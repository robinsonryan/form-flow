<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Models/FlowResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Models\FlowResponse
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-495745e19f2250070484aca80f42ca6cc9aaf35d449b1e04484e2a7800182c71',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'filename' => '/var/www/html/src/Models/FlowResponse.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Models',
    'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
    'shortName' => 'FlowResponse',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
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
 * @property \\Illuminate\\Support\\Carbon|null $submitted_at
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property \\Illuminate\\Support\\Carbon|null $deleted_at
 * @property-read Flow $flow
 * @property-read FormTemplate|null $template
 * @property-read Model|null $subject
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 37,
    'endLine' => 228,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'RobinsonRyan\\FormFlow\\Traits\\HasConfigurableUuid',
      1 => 'Illuminate\\Database\\Eloquent\\SoftDeletes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'guarded' => 
      array (
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 80,
            'startFilePos' => 1396,
            'endTokenPos' => 81,
            'endFilePos' => 1397,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'casts' => 
      array (
        'name' => 'casts',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string, mixed>
 */',
        'startLine' => 47,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'getTable' => 
      array (
        'name' => 'getTable',
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
        'startLine' => 59,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'flow' => 
      array (
        'name' => 'flow',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return BelongsTo<Flow, $this>
 */',
        'startLine' => 67,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'template' => 
      array (
        'name' => 'template',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return BelongsTo<FormTemplate, $this>
 */',
        'startLine' => 75,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'subject' => 
      array (
        'name' => 'subject',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return MorphTo<Model, $this>
 */',
        'startLine' => 83,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isInProgress' => 
      array (
        'name' => 'isInProgress',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 88,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isAwaitingApplicant' => 
      array (
        'name' => 'isAwaitingApplicant',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 93,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isCompleted' => 
      array (
        'name' => 'isCompleted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 98,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isExpired' => 
      array (
        'name' => 'isExpired',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 103,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isCancelled' => 
      array (
        'name' => 'isCancelled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 108,
        'endLine' => 111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isTerminal' => 
      array (
        'name' => 'isTerminal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 113,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'canTransitionTo' => 
      array (
        'name' => 'canTransitionTo',
        'parameters' => 
        array (
          'status' => 
          array (
            'name' => 'status',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'RobinsonRyan\\FormFlow\\Enums\\ResponseStatus',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 118,
            'endLine' => 118,
            'startColumn' => 37,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 118,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'setStepResponse' => 
      array (
        'name' => 'setStepResponse',
        'parameters' => 
        array (
          'stepKey' => 
          array (
            'name' => 'stepKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 126,
            'endLine' => 126,
            'startColumn' => 54,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param  array<string, mixed>  $data
 */',
        'startLine' => 126,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'getStepResponse' => 
      array (
        'name' => 'getStepResponse',
        'parameters' => 
        array (
          'stepKey' => 
          array (
            'name' => 'stepKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<string, mixed>
 */',
        'startLine' => 136,
        'endLine' => 139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'markStepCompleted' => 
      array (
        'name' => 'markStepCompleted',
        'parameters' => 
        array (
          'stepKey' => 
          array (
            'name' => 'stepKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 39,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 141,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'isStepCompleted' => 
      array (
        'name' => 'isStepCompleted',
        'parameters' => 
        array (
          'stepKey' => 
          array (
            'name' => 'stepKey',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 151,
            'endLine' => 151,
            'startColumn' => 37,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 151,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'getCompletedStepKeys' => 
      array (
        'name' => 'getCompletedStepKeys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return array<int, string>
 */',
        'startLine' => 159,
        'endLine' => 169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'handOffToApplicant' => 
      array (
        'name' => 'handOffToApplicant',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 171,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'resumeByApplicant' => 
      array (
        'name' => 'resumeByApplicant',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 182,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'complete' => 
      array (
        'name' => 'complete',
        'parameters' => 
        array (
          'completedBy' => 
          array (
            'name' => 'completedBy',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 193,
                'endLine' => 193,
                'startTokenPos' => 886,
                'startFilePos' => 5033,
                'endTokenPos' => 886,
                'endFilePos' => 5036,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 30,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'completedByType' => 
          array (
            'name' => 'completedByType',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 193,
                'endLine' => 193,
                'startTokenPos' => 896,
                'startFilePos' => 5069,
                'endTokenPos' => 896,
                'endFilePos' => 5072,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'RobinsonRyan\\FormFlow\\Enums\\ActorType',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 193,
            'endLine' => 193,
            'startColumn' => 59,
            'endColumn' => 92,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 193,
        'endLine' => 205,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'cancel' => 
      array (
        'name' => 'cancel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 207,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'aliasName' => NULL,
      ),
      'expire' => 
      array (
        'name' => 'expire',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 218,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowResponse',
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