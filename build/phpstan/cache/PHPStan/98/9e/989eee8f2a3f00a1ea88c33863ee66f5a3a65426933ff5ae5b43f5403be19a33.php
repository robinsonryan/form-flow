<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Models/FormTemplate.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Models\FormTemplate
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-092a8d6c2b383ff3eab56743899e2808fb6c421e83becbb3dbe35524f48e9648',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'filename' => '/var/www/html/src/Models/FormTemplate.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Models',
    'name' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
    'shortName' => 'FormTemplate',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @property string $id
 * @property string $account_id
 * @property string $flow_id
 * @property string $name
 * @property string|null $description
 * @property FlowStatus $status
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property \\Illuminate\\Support\\Carbon|null $deleted_at
 * @property-read Flow $flow
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FormTemplateStep> $steps
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FlowResponse> $responses
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 28,
    'endLine' => 94,
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 75,
            'startFilePos' => 1049,
            'endTokenPos' => 76,
            'endFilePos' => 1050,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
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
        'startLine' => 38,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
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
        'startLine' => 45,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
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
        'startLine' => 53,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'aliasName' => NULL,
      ),
      'steps' => 
      array (
        'name' => 'steps',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return HasMany<FormTemplateStep, $this>
 */',
        'startLine' => 61,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'aliasName' => NULL,
      ),
      'responses' => 
      array (
        'name' => 'responses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return HasMany<FlowResponse, $this>
 */',
        'startLine' => 69,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'aliasName' => NULL,
      ),
      'isActive' => 
      array (
        'name' => 'isActive',
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
        'startLine' => 74,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'aliasName' => NULL,
      ),
      'isDraft' => 
      array (
        'name' => 'isDraft',
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
        'startLine' => 79,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'aliasName' => NULL,
      ),
      'activate' => 
      array (
        'name' => 'activate',
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
        'startLine' => 84,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FormTemplate',
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