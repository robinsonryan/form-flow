<?php declare(strict_types = 1);

// odsl-/var/www/html/src/Models/FlowSlot.php-PHPStan\BetterReflection\Reflection\ReflectionClass-RobinsonRyan\FormFlow\Models\FlowSlot
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.3.27-8d281e2bf93d40b6da03ac3e76427d6ed90c6195cdb7fcfa63c97d63fcbad1e9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'filename' => '/var/www/html/src/Models/FlowSlot.php',
      ),
    ),
    'namespace' => 'RobinsonRyan\\FormFlow\\Models',
    'name' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
    'shortName' => 'FlowSlot',
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
 * @property string|null $description
 * @property \\Illuminate\\Support\\Carbon|null $created_at
 * @property \\Illuminate\\Support\\Carbon|null $updated_at
 * @property-read Flow $flow
 * @property-read \\Illuminate\\Database\\Eloquent\\Collection<int, FormTemplateStep> $templateSteps
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 24,
    'endLine' => 60,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'RobinsonRyan\\FormFlow\\Traits\\HasConfigurableUuid',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'guarded' => 
      array (
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'name' => 'guarded',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 28,
            'endLine' => 28,
            'startTokenPos' => 60,
            'startFilePos' => 784,
            'endTokenPos' => 61,
            'endFilePos' => 785,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 28,
        'endLine' => 28,
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
        'startLine' => 33,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
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
        'startLine' => 40,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'RobinsonRyan\\FormFlow\\Models',
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'aliasName' => NULL,
      ),
      'templateSteps' => 
      array (
        'name' => 'templateSteps',
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
        'declaringClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'implementingClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
        'currentClassName' => 'RobinsonRyan\\FormFlow\\Models\\FlowSlot',
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