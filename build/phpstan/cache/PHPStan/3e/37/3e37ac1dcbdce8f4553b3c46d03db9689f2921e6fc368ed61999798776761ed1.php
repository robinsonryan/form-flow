<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Models/FlowStep.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Models\FlowStep
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-b0cf33deafdfea6b920fdb465dc6fa7387c675b3b1e6deee4bcbb98192b7d024',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'filename' => '/var/www/html/src/Models/FlowStep.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Models',
    'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
    'shortName' => 'FlowStep',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @property string $id
 * @property string $flow_id
 * @property string $key
 * @property string $name
 * @property int $position
 * @property VisibilityMode $visibility_mode
 * @property array<string, mixed>|null $visibility_conditions
 * @property array<int, array<string, mixed>> $fields
 * @property array<string, mixed>|null $validation_rules
 * @property array<string, mixed>|null $validation_schema
 * @property array<string, mixed>|null $ui_schema
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property \\Illuminate\\Support\\Carbon|null $deleted_at
 * @property-read Flow $flow
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 31,
    'endLine' => 167,
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 75,
            'startFilePos' => 1138,
            'endTokenPos' => 76,
            'endFilePos' => 1139,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'attributes' => 
      array (
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'name' => 'attributes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'visibility_mode\' => \'always\']',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 41,
            'startTokenPos' => 87,
            'startFilePos' => 1208,
            'endTokenPos' => 96,
            'endFilePos' => 1253,
          ),
        ),
        'docComment' => '/** @var array<string, mixed> */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 6,
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
        'startLine' => 46,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'isVisibleFor' => 
      array (
        'name' => 'isVisibleFor',
        'parameters' => 
        array (
          'actorType' => 
          array (
            'name' => 'actorType',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'RobinsonRyan\\FormFlow\\Enums\\ActorType',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 34,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'isAlwaysVisible' => 
      array (
        'name' => 'isAlwaysVisible',
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
        'startLine' => 77,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'isCustomerOnly' => 
      array (
        'name' => 'isCustomerOnly',
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
        'startLine' => 82,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'isApplicantOnly' => 
      array (
        'name' => 'isApplicantOnly',
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
        'startLine' => 87,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'isConditional' => 
      array (
        'name' => 'isConditional',
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
        'startLine' => 92,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'getLaravelValidationRules' => 
      array (
        'name' => 'getLaravelValidationRules',
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
 * @return array<string, array<int, string>>
 */',
        'startLine' => 100,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'aliasName' => NULL,
      ),
      'buildFieldRules' => 
      array (
        'name' => 'buildFieldRules',
        'parameters' => 
        array (
          'field' => 
          array (
            'name' => 'field',
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
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 38,
            'endColumn' => 49,
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
 * @param  array<string, mixed>  $field
 * @return array<int, string>
 */',
        'startLine' => 127,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowStep',
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