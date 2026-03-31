<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Models/Flow.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Models\Flow
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-5f0f951bf09982d4fcd7c330c67ce9738b4b56bf1b669ced50984e69b156df52',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'filename' => '/var/www/html/src/Models/Flow.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Models',
    'name' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
    'shortName' => 'Flow',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @property string $id
 * @property string $key
 * @property string $name
 * @property string|null $description
 * @property OwnerScope $owner_scope
 * @property string|null $account_id
 * @property FlowStatus $status
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property \\Illuminate\\Support\\Carbon|null $deleted_at
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FlowStep> $steps
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FlowSlot> $slots
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FormTemplate> $templates
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FlowResponse> $responses
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 30,
    'endLine' => 126,
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 75,
            'startFilePos' => 1202,
            'endTokenPos' => 76,
            'endFilePos' => 1203,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
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
        'startLine' => 40,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
        'startLine' => 48,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
 * @return HasMany<FlowStep, $this>
 */',
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'aliasName' => NULL,
      ),
      'slots' => 
      array (
        'name' => 'slots',
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
 * @return HasMany<FlowSlot, $this>
 */',
        'startLine' => 64,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'aliasName' => NULL,
      ),
      'templates' => 
      array (
        'name' => 'templates',
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
 * @return HasMany<FormTemplate, $this>
 */',
        'startLine' => 72,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
        'startLine' => 80,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'aliasName' => NULL,
      ),
      'isGlobal' => 
      array (
        'name' => 'isGlobal',
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
        'startLine' => 85,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'aliasName' => NULL,
      ),
      'isTenant' => 
      array (
        'name' => 'isTenant',
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
        'startLine' => 90,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
        'startLine' => 95,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
        'startLine' => 100,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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
        'startLine' => 105,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'aliasName' => NULL,
      ),
      'archive' => 
      array (
        'name' => 'archive',
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
        'startLine' => 116,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\Flow',
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