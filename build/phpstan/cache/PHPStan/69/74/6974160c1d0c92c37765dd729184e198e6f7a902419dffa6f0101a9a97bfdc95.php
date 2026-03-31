<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Query\Builder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-e8145ba8539d6b3a73c2c24c2010c395174d151d9d352d5cda36d9ec59fd5e61-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Database\\Query\\Builder',
        'filename' => '/var/www/html/vendor/composer/../laravel/framework/src/Illuminate/Database/Query/Builder.php',
      ),
    ),
    'namespace' => 'Illuminate\\Database\\Query',
    'name' => 'Illuminate\\Database\\Query\\Builder',
    'shortName' => 'Builder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 36,
    'endLine' => 4708,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Database\\Query\\Builder',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses',
      1 => 'Illuminate\\Database\\Concerns\\BuildsQueries',
      2 => 'Illuminate\\Database\\Concerns\\ExplainsQueries',
      3 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
      4 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'connection' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'connection',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database connection instance.
 *
 * @var \\Illuminate\\Database\\ConnectionInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 48,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'grammar' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'grammar',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database query grammar instance.
 *
 * @var \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 55,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'processor' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'processor',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The database query post processor instance.
 *
 * @var \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bindings' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'bindings',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'select\' => [], \'from\' => [], \'join\' => [], \'where\' => [], \'groupBy\' => [], \'having\' => [], \'order\' => [], \'union\' => [], \'unionOrder\' => []]',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 89,
            'startTokenPos' => 234,
            'startFilePos' => 2299,
            'endTokenPos' => 308,
            'endFilePos' => 2519,
          ),
        ),
        'docComment' => '/**
 * The current query value bindings.
 *
 * @var array{
 *     select: list<mixed>,
 *     from: list<mixed>,
 *     join: list<mixed>,
 *     where: list<mixed>,
 *     groupBy: list<mixed>,
 *     having: list<mixed>,
 *     order: list<mixed>,
 *     union: list<mixed>,
 *     unionOrder: list<mixed>,
 * }
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'aggregate' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'aggregate',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * An aggregate function and column to be run.
 *
 * @var array{
 *     function: string,
 *     columns: array<\\Illuminate\\Contracts\\Database\\Query\\Expression|string>
 * }|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 99,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'columns' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'columns',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The columns that should be returned.
 *
 * @var array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 106,
        'endLine' => 106,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'distinct' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'distinct',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 115,
            'endLine' => 115,
            'startTokenPos' => 333,
            'startFilePos' => 3131,
            'endTokenPos' => 333,
            'endFilePos' => 3135,
          ),
        ),
        'docComment' => '/**
 * Indicates if the query returns distinct results.
 *
 * Occasionally contains the columns that should be distinct.
 *
 * @var bool|array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 115,
        'endLine' => 115,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'from' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'from',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table which the query is targeting.
 *
 * @var \\Illuminate\\Database\\Query\\Expression|string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 122,
        'endLine' => 122,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'indexHint' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'indexHint',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The index hint for the query.
 *
 * @var \\Illuminate\\Database\\Query\\IndexHint|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 129,
        'endLine' => 129,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'joins' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'joins',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The table joins for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'wheres' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'wheres',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 143,
            'endLine' => 143,
            'startTokenPos' => 365,
            'startFilePos' => 3633,
            'endTokenPos' => 366,
            'endFilePos' => 3634,
          ),
        ),
        'docComment' => '/**
 * The where constraints for the query.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 143,
        'endLine' => 143,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groups' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'groups',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The groupings for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 150,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'havings' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'havings',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The having constraints for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 157,
        'endLine' => 157,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'orders' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'orders',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The orderings for the query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'limit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'limit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of records to return.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 171,
        'endLine' => 171,
        'startColumn' => 5,
        'endColumn' => 18,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'groupLimit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'groupLimit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of records to return per group.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 178,
        'endLine' => 178,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'offset' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'offset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of records to skip.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 185,
        'endLine' => 185,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unions' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unions',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The query union statements.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 192,
        'endLine' => 192,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionLimit' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionLimit',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The maximum number of union records to return.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 199,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionOffset' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionOffset',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The number of union records to skip.
 *
 * @var int|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 206,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'unionOrders' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'unionOrders',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The orderings for the union query.
 *
 * @var array|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 213,
        'endLine' => 213,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lock' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'lock',
        'modifiers' => 1,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates whether row locking is being used.
 *
 * @var string|bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 220,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 17,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'beforeQueryCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'beforeQueryCallbacks',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 227,
            'endLine' => 227,
            'startTokenPos' => 454,
            'startFilePos' => 5027,
            'endTokenPos' => 455,
            'endFilePos' => 5028,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be invoked before the query is executed.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 227,
        'endLine' => 227,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterQueryCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'afterQueryCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 234,
            'endLine' => 234,
            'startTokenPos' => 466,
            'startFilePos' => 5195,
            'endTokenPos' => 467,
            'endFilePos' => 5196,
          ),
        ),
        'docComment' => '/**
 * The callbacks that should be invoked after retrieving data from the database.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 234,
        'endLine' => 234,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'operators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'operators',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'=\', \'<\', \'>\', \'<=\', \'>=\', \'<>\', \'!=\', \'<=>\', \'like\', \'like binary\', \'not like\', \'ilike\', \'&\', \'|\', \'^\', \'<<\', \'>>\', \'&~\', \'is\', \'is not\', \'rlike\', \'not rlike\', \'regexp\', \'not regexp\', \'~\', \'~*\', \'!~\', \'!~*\', \'similar to\', \'not similar to\', \'not ilike\', \'~~*\', \'!~~*\']',
          'attributes' => 
          array (
            'startLine' => 241,
            'endLine' => 248,
            'startTokenPos' => 478,
            'startFilePos' => 5314,
            'endTokenPos' => 579,
            'endFilePos' => 5637,
          ),
        ),
        'docComment' => '/**
 * All of the available clause operators.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 241,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bitwiseOperators' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'bitwiseOperators',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'&\', \'|\', \'^\', \'<<\', \'>>\', \'&~\']',
          'attributes' => 
          array (
            'startLine' => 255,
            'endLine' => 257,
            'startTokenPos' => 590,
            'startFilePos' => 5763,
            'endTokenPos' => 610,
            'endFilePos' => 5810,
          ),
        ),
        'docComment' => '/**
 * All of the available bitwise operators.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 255,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useWritePdo' => 
      array (
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'name' => 'useWritePdo',
        'modifiers' => 1,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 264,
            'endLine' => 264,
            'startTokenPos' => 621,
            'startFilePos' => 5928,
            'endTokenPos' => 621,
            'endFilePos' => 5932,
          ),
        ),
        'docComment' => '/**
 * Whether to use write pdo for the select.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 264,
        'endLine' => 264,
        'startColumn' => 5,
        'endColumn' => 32,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Database\\ConnectionInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 270,
            'endLine' => 270,
            'startColumn' => 9,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'grammar' => 
          array (
            'name' => 'grammar',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 271,
                'endLine' => 271,
                'startTokenPos' => 645,
                'startFilePos' => 6098,
                'endTokenPos' => 645,
                'endFilePos' => 6101,
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
                      'name' => 'Illuminate\\Database\\Query\\Grammars\\Grammar',
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
            'startLine' => 271,
            'endLine' => 271,
            'startColumn' => 9,
            'endColumn' => 32,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'processor' => 
          array (
            'name' => 'processor',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 272,
                'endLine' => 272,
                'startTokenPos' => 655,
                'startFilePos' => 6136,
                'endTokenPos' => 655,
                'endFilePos' => 6139,
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
                      'name' => 'Illuminate\\Database\\Query\\Processors\\Processor',
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
            'startLine' => 272,
            'endLine' => 272,
            'startColumn' => 9,
            'endColumn' => 36,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query builder instance.
 */',
        'startLine' => 269,
        'endLine' => 277,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'select' => 
      array (
        'name' => 'select',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 285,
                'endLine' => 285,
                'startTokenPos' => 721,
                'startFilePos' => 6493,
                'endTokenPos' => 723,
                'endFilePos' => 6497,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the columns to be selected.
 *
 * @param  mixed  $columns
 * @return $this
 */',
        'startLine' => 285,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectSub' => 
      array (
        'name' => 'selectSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 312,
            'endLine' => 312,
            'startColumn' => 39,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subselect expression to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 312,
        'endLine' => 319,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectRaw' => 
      array (
        'name' => 'selectRaw',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 327,
                'endLine' => 327,
                'startTokenPos' => 926,
                'startFilePos' => 7626,
                'endTokenPos' => 927,
                'endFilePos' => 7627,
              ),
            ),
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
            'startLine' => 327,
            'endLine' => 327,
            'startColumn' => 44,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a new "raw" select expression to the query.
 *
 * @param  string  $expression
 * @return $this
 */',
        'startLine' => 327,
        'endLine' => 336,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'fromSub' => 
      array (
        'name' => 'fromSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 37,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Makes "from" fetch from a subquery.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 347,
        'endLine' => 352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'fromRaw' => 
      array (
        'name' => 'fromRaw',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 361,
            'endLine' => 361,
            'startColumn' => 29,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 361,
                'endLine' => 361,
                'startTokenPos' => 1049,
                'startFilePos' => 8499,
                'endTokenPos' => 1050,
                'endFilePos' => 8500,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 361,
            'endLine' => 361,
            'startColumn' => 42,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "from" clause to the query.
 *
 * @param  string  $expression
 * @param  mixed  $bindings
 * @return $this
 */',
        'startLine' => 361,
        'endLine' => 368,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'createSub' => 
      array (
        'name' => 'createSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a subquery and parse it.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return array
 */',
        'startLine' => 376,
        'endLine' => 388,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'parseSub' => 
      array (
        'name' => 'parseSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 398,
            'endLine' => 398,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse the subquery into SQL and bindings.
 *
 * @param  mixed  $query
 * @return array
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 398,
        'endLine' => 411,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'prependDatabaseNameIfCrossDatabaseQuery' => 
      array (
        'name' => 'prependDatabaseNameIfCrossDatabaseQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 64,
            'endColumn' => 69,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepend the database name if the given query is on another database.
 *
 * @param  mixed  $query
 * @return mixed
 */',
        'startLine' => 419,
        'endLine' => 431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addSelect' => 
      array (
        'name' => 'addSelect',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a new select column to the query.
 *
 * @param  mixed  $column
 * @return $this
 */',
        'startLine' => 439,
        'endLine' => 460,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'selectVectorDistance' => 
      array (
        'name' => 'selectVectorDistance',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 470,
                'endLine' => 470,
                'startTokenPos' => 1569,
                'startFilePos' => 11846,
                'endTokenPos' => 1569,
                'endFilePos' => 11849,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 60,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector-similarity selection to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  string|null  $as
 * @return $this
 */',
        'startLine' => 470,
        'endLine' => 493,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'distinct' => 
      array (
        'name' => 'distinct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Force the query to only return distinct results.
 *
 * @return $this
 */',
        'startLine' => 500,
        'endLine' => 511,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'from' => 
      array (
        'name' => 'from',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 520,
            'endLine' => 520,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 520,
                'endLine' => 520,
                'startTokenPos' => 1817,
                'startFilePos' => 13199,
                'endTokenPos' => 1817,
                'endFilePos' => 13202,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 520,
            'endLine' => 520,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the table which the query is targeting.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  string|null  $as
 * @return $this
 */',
        'startLine' => 520,
        'endLine' => 529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'useIndex' => 
      array (
        'name' => 'useIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 537,
            'endLine' => 537,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to suggest a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 537,
        'endLine' => 542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forceIndex' => 
      array (
        'name' => 'forceIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 550,
            'endLine' => 550,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to force a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 550,
        'endLine' => 555,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ignoreIndex' => 
      array (
        'name' => 'ignoreIndex',
        'parameters' => 
        array (
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an index hint to ignore a query index.
 *
 * @param  string  $index
 * @return $this
 */',
        'startLine' => 563,
        'endLine' => 568,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2011,
                'startFilePos' => 14655,
                'endTokenPos' => 2011,
                'endFilePos' => 14658,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2018,
                'startFilePos' => 14671,
                'endTokenPos' => 2018,
                'endFilePos' => 14674,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 60,
            'endColumn' => 73,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2025,
                'startFilePos' => 14685,
                'endTokenPos' => 2025,
                'endFilePos' => 14691,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 76,
            'endColumn' => 90,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 581,
                'endLine' => 581,
                'startTokenPos' => 2032,
                'startFilePos' => 14703,
                'endTokenPos' => 2032,
                'endFilePos' => 14707,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 581,
            'endLine' => 581,
            'startColumn' => 93,
            'endColumn' => 106,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @param  string  $type
 * @param  bool  $where
 * @return $this
 */',
        'startLine' => 581,
        'endLine' => 608,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinWhere' => 
      array (
        'name' => 'joinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 47,
            'endColumn' => 55,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 620,
                'endLine' => 620,
                'startTokenPos' => 2202,
                'startFilePos' => 16173,
                'endTokenPos' => 2202,
                'endFilePos' => 16179,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 620,
            'endLine' => 620,
            'startColumn' => 67,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $second
 * @param  string  $type
 * @return $this
 */',
        'startLine' => 620,
        'endLine' => 623,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinSub' => 
      array (
        'name' => 'joinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 37,
            'endColumn' => 39,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 639,
                'endLine' => 639,
                'startTokenPos' => 2255,
                'startFilePos' => 16883,
                'endTokenPos' => 2255,
                'endFilePos' => 16886,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 639,
                'endLine' => 639,
                'startTokenPos' => 2262,
                'startFilePos' => 16899,
                'endTokenPos' => 2262,
                'endFilePos' => 16902,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 68,
            'endColumn' => 81,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 639,
                'endLine' => 639,
                'startTokenPos' => 2269,
                'startFilePos' => 16913,
                'endTokenPos' => 2269,
                'endFilePos' => 16919,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 84,
            'endColumn' => 98,
            'parameterIndex' => 5,
            'isOptional' => true,
          ),
          'where' => 
          array (
            'name' => 'where',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 639,
                'endLine' => 639,
                'startTokenPos' => 2276,
                'startFilePos' => 16931,
                'endTokenPos' => 2276,
                'endFilePos' => 16935,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 639,
            'endLine' => 639,
            'startColumn' => 101,
            'endColumn' => 114,
            'parameterIndex' => 6,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "subquery join" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @param  string  $type
 * @param  bool  $where
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 639,
        'endLine' => 648,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'joinLateral' => 
      array (
        'name' => 'joinLateral',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 656,
            'endLine' => 656,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
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
            'startLine' => 656,
            'endLine' => 656,
            'startColumn' => 41,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'inner\'',
              'attributes' => 
              array (
                'startLine' => 656,
                'endLine' => 656,
                'startTokenPos' => 2383,
                'startFilePos' => 17504,
                'endTokenPos' => 2383,
                'endFilePos' => 17510,
              ),
            ),
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
            'startLine' => 656,
            'endLine' => 656,
            'startColumn' => 53,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "lateral join" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return $this
 */',
        'startLine' => 656,
        'endLine' => 667,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinLateral' => 
      array (
        'name' => 'leftJoinLateral',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 675,
            'endLine' => 675,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
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
            'startLine' => 675,
            'endLine' => 675,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a lateral left join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return $this
 */',
        'startLine' => 675,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoin' => 
      array (
        'name' => 'leftJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 38,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 689,
                'endLine' => 689,
                'startTokenPos' => 2524,
                'startFilePos' => 18578,
                'endTokenPos' => 2524,
                'endFilePos' => 18581,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 689,
                'endLine' => 689,
                'startTokenPos' => 2531,
                'startFilePos' => 18594,
                'endTokenPos' => 2531,
                'endFilePos' => 18597,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 689,
            'endLine' => 689,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a left join to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 689,
        'endLine' => 692,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinWhere' => 
      array (
        'name' => 'leftJoinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 51,
            'endColumn' => 59,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 703,
            'endLine' => 703,
            'startColumn' => 62,
            'endColumn' => 68,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 703,
        'endLine' => 706,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'leftJoinSub' => 
      array (
        'name' => 'leftJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 41,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 718,
                'endLine' => 718,
                'startTokenPos' => 2627,
                'startFilePos' => 19724,
                'endTokenPos' => 2627,
                'endFilePos' => 19727,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 718,
                'endLine' => 718,
                'startTokenPos' => 2634,
                'startFilePos' => 19740,
                'endTokenPos' => 2634,
                'endFilePos' => 19743,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 718,
            'endLine' => 718,
            'startColumn' => 72,
            'endColumn' => 85,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery left join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 718,
        'endLine' => 721,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoin' => 
      array (
        'name' => 'rightJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 732,
                'endLine' => 732,
                'startTokenPos' => 2684,
                'startFilePos' => 20218,
                'endTokenPos' => 2684,
                'endFilePos' => 20221,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 732,
                'endLine' => 732,
                'startTokenPos' => 2691,
                'startFilePos' => 20234,
                'endTokenPos' => 2691,
                'endFilePos' => 20237,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 732,
            'endLine' => 732,
            'startColumn' => 65,
            'endColumn' => 78,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a right join to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 732,
        'endLine' => 735,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoinWhere' => 
      array (
        'name' => 'rightJoinWhere',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 52,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 63,
            'endColumn' => 69,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "right join where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $second
 * @return $this
 */',
        'startLine' => 746,
        'endLine' => 749,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rightJoinSub' => 
      array (
        'name' => 'rightJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 42,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 761,
                'endLine' => 761,
                'startTokenPos' => 2787,
                'startFilePos' => 21370,
                'endTokenPos' => 2787,
                'endFilePos' => 21373,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 55,
            'endColumn' => 70,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 761,
                'endLine' => 761,
                'startTokenPos' => 2794,
                'startFilePos' => 21386,
                'endTokenPos' => 2794,
                'endFilePos' => 21389,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 761,
            'endLine' => 761,
            'startColumn' => 73,
            'endColumn' => 86,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery right join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 761,
        'endLine' => 764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'crossJoin' => 
      array (
        'name' => 'crossJoin',
        'parameters' => 
        array (
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 31,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'first' => 
          array (
            'name' => 'first',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 775,
                'endLine' => 775,
                'startTokenPos' => 2841,
                'startFilePos' => 21916,
                'endTokenPos' => 2841,
                'endFilePos' => 21919,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 39,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 775,
                'endLine' => 775,
                'startTokenPos' => 2848,
                'startFilePos' => 21934,
                'endTokenPos' => 2848,
                'endFilePos' => 21937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 775,
                'endLine' => 775,
                'startTokenPos' => 2855,
                'startFilePos' => 21950,
                'endTokenPos' => 2855,
                'endFilePos' => 21953,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 775,
            'endLine' => 775,
            'startColumn' => 72,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "cross join" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @param  \\Closure|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $first
 * @param  string|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $second
 * @return $this
 */',
        'startLine' => 775,
        'endLine' => 784,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'crossJoinSub' => 
      array (
        'name' => 'crossJoinSub',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'as' => 
          array (
            'name' => 'as',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 793,
            'endLine' => 793,
            'startColumn' => 42,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a subquery cross join to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @param  string  $as
 * @return $this
 */',
        'startLine' => 793,
        'endLine' => 804,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newJoinClause' => 
      array (
        'name' => 'newJoinClause',
        'parameters' => 
        array (
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 813,
            'endLine' => 813,
            'startColumn' => 38,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 813,
            'endLine' => 813,
            'startColumn' => 57,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 813,
            'endLine' => 813,
            'startColumn' => 64,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new "join" clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @return \\Illuminate\\Database\\Query\\JoinClause
 */',
        'startLine' => 813,
        'endLine' => 816,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newJoinLateralClause' => 
      array (
        'name' => 'newJoinLateralClause',
        'parameters' => 
        array (
          'parentQuery' => 
          array (
            'name' => 'parentQuery',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 45,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 64,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'table' => 
          array (
            'name' => 'table',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 825,
            'endLine' => 825,
            'startColumn' => 71,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new "join lateral" clause.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $table
 * @return \\Illuminate\\Database\\Query\\JoinLateralClause
 */',
        'startLine' => 825,
        'endLine' => 828,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'mergeWheres' => 
      array (
        'name' => 'mergeWheres',
        'parameters' => 
        array (
          'wheres' => 
          array (
            'name' => 'wheres',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 837,
            'endLine' => 837,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 837,
            'endLine' => 837,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge an array of "where" clauses and bindings.
 *
 * @param  array  $wheres
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 837,
        'endLine' => 846,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 857,
                'endLine' => 857,
                'startTokenPos' => 3184,
                'startFilePos' => 24279,
                'endTokenPos' => 3184,
                'endFilePos' => 24282,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 857,
                'endLine' => 857,
                'startTokenPos' => 3191,
                'startFilePos' => 24294,
                'endTokenPos' => 3191,
                'endFilePos' => 24297,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 857,
                'endLine' => 857,
                'startTokenPos' => 3198,
                'startFilePos' => 24311,
                'endTokenPos' => 3198,
                'endFilePos' => 24315,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 857,
            'endLine' => 857,
            'startColumn' => 69,
            'endColumn' => 84,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a basic "where" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 857,
        'endLine' => 952,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addArrayOfWheres' => 
      array (
        'name' => 'addArrayOfWheres',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 962,
            'endLine' => 962,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 962,
            'endLine' => 962,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'method' => 
          array (
            'name' => 'method',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 962,
                'endLine' => 962,
                'startTokenPos' => 3788,
                'startFilePos' => 28796,
                'endTokenPos' => 3788,
                'endFilePos' => 28802,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 962,
            'endLine' => 962,
            'startColumn' => 60,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an array of "where" clauses to the query.
 *
 * @param  array  $column
 * @param  string  $boolean
 * @param  string  $method
 * @return $this
 */',
        'startLine' => 962,
        'endLine' => 973,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'prepareValueAndOperator' => 
      array (
        'name' => 'prepareValueAndOperator',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 985,
            'endLine' => 985,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 985,
            'endLine' => 985,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'useDefault' => 
          array (
            'name' => 'useDefault',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 985,
                'endLine' => 985,
                'startTokenPos' => 3929,
                'startFilePos' => 29568,
                'endTokenPos' => 3929,
                'endFilePos' => 29572,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 985,
            'endLine' => 985,
            'startColumn' => 64,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prepare the value and operator for a where clause.
 *
 * @param  string  $value
 * @param  string  $operator
 * @param  bool  $useDefault
 * @return array
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 985,
        'endLine' => 994,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'invalidOperatorAndValue' => 
      array (
        'name' => 'invalidOperatorAndValue',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1005,
            'endLine' => 1005,
            'startColumn' => 59,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the given operator and value combination is legal.
 *
 * Prevents using Null values with invalid operators.
 *
 * @param  string  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 1005,
        'endLine' => 1009,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'invalidOperator' => 
      array (
        'name' => 'invalidOperator',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1017,
            'endLine' => 1017,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the given operator is supported.
 *
 * @param  string  $operator
 * @return bool
 */',
        'startLine' => 1017,
        'endLine' => 1021,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'isBitwiseOperator' => 
      array (
        'name' => 'isBitwiseOperator',
        'parameters' => 
        array (
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1029,
            'endLine' => 1029,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the operator is a bitwise operator.
 *
 * @param  string  $operator
 * @return bool
 */',
        'startLine' => 1029,
        'endLine' => 1033,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhere' => 
      array (
        'name' => 'orWhere',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1043,
            'endLine' => 1043,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1043,
                'endLine' => 1043,
                'startTokenPos' => 4197,
                'startFilePos' => 31367,
                'endTokenPos' => 4197,
                'endFilePos' => 31370,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1043,
            'endLine' => 1043,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1043,
                'endLine' => 1043,
                'startTokenPos' => 4204,
                'startFilePos' => 31382,
                'endTokenPos' => 4204,
                'endFilePos' => 31385,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1043,
            'endLine' => 1043,
            'startColumn' => 56,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1043,
        'endLine' => 1050,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNot' => 
      array (
        'name' => 'whereNot',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1061,
                'endLine' => 1061,
                'startTokenPos' => 4276,
                'startFilePos' => 31924,
                'endTokenPos' => 4276,
                'endFilePos' => 31927,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1061,
                'endLine' => 1061,
                'startTokenPos' => 4283,
                'startFilePos' => 31939,
                'endTokenPos' => 4283,
                'endFilePos' => 31942,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1061,
                'endLine' => 1061,
                'startTokenPos' => 4290,
                'startFilePos' => 31956,
                'endTokenPos' => 4290,
                'endFilePos' => 31960,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a basic "where not" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1061,
        'endLine' => 1070,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNot' => 
      array (
        'name' => 'orWhereNot',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1080,
                'endLine' => 1080,
                'startTokenPos' => 4401,
                'startFilePos' => 32598,
                'endTokenPos' => 4401,
                'endFilePos' => 32601,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1080,
                'endLine' => 1080,
                'startTokenPos' => 4408,
                'startFilePos' => 32613,
                'endTokenPos' => 4408,
                'endFilePos' => 32616,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not" clause to the query.
 *
 * @param  \\Closure|string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 1080,
        'endLine' => 1083,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereColumn' => 
      array (
        'name' => 'whereColumn',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1094,
            'endLine' => 1094,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1094,
                'endLine' => 1094,
                'startTokenPos' => 4449,
                'startFilePos' => 33053,
                'endTokenPos' => 4449,
                'endFilePos' => 33056,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1094,
            'endLine' => 1094,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1094,
                'endLine' => 1094,
                'startTokenPos' => 4456,
                'startFilePos' => 33069,
                'endTokenPos' => 4456,
                'endFilePos' => 33072,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1094,
            'endLine' => 1094,
            'startColumn' => 59,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1094,
                'endLine' => 1094,
                'startTokenPos' => 4463,
                'startFilePos' => 33086,
                'endTokenPos' => 4463,
                'endFilePos' => 33090,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1094,
            'endLine' => 1094,
            'startColumn' => 75,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause comparing two columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @param  string|null  $boolean
 * @return $this
 */',
        'startLine' => 1094,
        'endLine' => 1120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereColumn' => 
      array (
        'name' => 'orWhereColumn',
        'parameters' => 
        array (
          'first' => 
          array (
            'name' => 'first',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1130,
            'endLine' => 1130,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1130,
                'endLine' => 1130,
                'startTokenPos' => 4604,
                'startFilePos' => 34564,
                'endTokenPos' => 4604,
                'endFilePos' => 34567,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1130,
            'endLine' => 1130,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'second' => 
          array (
            'name' => 'second',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1130,
                'endLine' => 1130,
                'startTokenPos' => 4611,
                'startFilePos' => 34580,
                'endTokenPos' => 4611,
                'endFilePos' => 34583,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1130,
            'endLine' => 1130,
            'startColumn' => 61,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause comparing two columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return $this
 */',
        'startLine' => 1130,
        'endLine' => 1133,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereVectorSimilarTo' => 
      array (
        'name' => 'whereVectorSimilarTo',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1144,
            'endLine' => 1144,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1144,
            'endLine' => 1144,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'minSimilarity' => 
          array (
            'name' => 'minSimilarity',
            'default' => 
            array (
              'code' => '0.6',
              'attributes' => 
              array (
                'startLine' => 1144,
                'endLine' => 1144,
                'startTokenPos' => 4655,
                'startFilePos' => 35230,
                'endTokenPos' => 4655,
                'endFilePos' => 35232,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1144,
            'endLine' => 1144,
            'startColumn' => 60,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'order' => 
          array (
            'name' => 'order',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1144,
                'endLine' => 1144,
                'startTokenPos' => 4662,
                'startFilePos' => 35244,
                'endTokenPos' => 4662,
                'endFilePos' => 35247,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1144,
            'endLine' => 1144,
            'startColumn' => 82,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector similarity clause to the query, filtering by minimum similarity and ordering by similarity.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $minSimilarity  A value between 0.0 and 1.0, where 1.0 is identical.
 * @param  bool  $order
 * @return $this
 */',
        'startLine' => 1144,
        'endLine' => 1157,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereVectorDistanceLessThan' => 
      array (
        'name' => 'whereVectorDistanceLessThan',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1168,
            'endLine' => 1168,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1168,
            'endLine' => 1168,
            'startColumn' => 58,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'maxDistance' => 
          array (
            'name' => 'maxDistance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1168,
            'endLine' => 1168,
            'startColumn' => 67,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1168,
                'endLine' => 1168,
                'startTokenPos' => 4763,
                'startFilePos' => 36033,
                'endTokenPos' => 4763,
                'endFilePos' => 36037,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1168,
            'endLine' => 1168,
            'startColumn' => 81,
            'endColumn' => 96,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector distance "where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $maxDistance
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1168,
        'endLine' => 1189,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereVectorDistanceLessThan' => 
      array (
        'name' => 'orWhereVectorDistanceLessThan',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'maxDistance' => 
          array (
            'name' => 'maxDistance',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1199,
            'endLine' => 1199,
            'startColumn' => 69,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector distance "or where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>|string  $vector
 * @param  float  $maxDistance
 * @return $this
 */',
        'startLine' => 1199,
        'endLine' => 1202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereRaw' => 
      array (
        'name' => 'whereRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1212,
            'endLine' => 1212,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1212,
                'endLine' => 1212,
                'startTokenPos' => 4925,
                'startFilePos' => 37419,
                'endTokenPos' => 4926,
                'endFilePos' => 37420,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1212,
            'endLine' => 1212,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1212,
                'endLine' => 1212,
                'startTokenPos' => 4933,
                'startFilePos' => 37434,
                'endTokenPos' => 4933,
                'endFilePos' => 37438,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1212,
            'endLine' => 1212,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "where" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $sql
 * @param  mixed  $bindings
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1212,
        'endLine' => 1219,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereRaw' => 
      array (
        'name' => 'orWhereRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1228,
            'endLine' => 1228,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1228,
                'endLine' => 1228,
                'startTokenPos' => 5004,
                'startFilePos' => 37818,
                'endTokenPos' => 5005,
                'endFilePos' => 37819,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1228,
            'endLine' => 1228,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "or where" clause to the query.
 *
 * @param  string  $sql
 * @param  mixed  $bindings
 * @return $this
 */',
        'startLine' => 1228,
        'endLine' => 1231,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereLike' => 
      array (
        'name' => 'whereLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1243,
            'endLine' => 1243,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1243,
            'endLine' => 1243,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1243,
                'endLine' => 1243,
                'startTokenPos' => 5046,
                'startFilePos' => 38248,
                'endTokenPos' => 5046,
                'endFilePos' => 38252,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1243,
            'endLine' => 1243,
            'startColumn' => 48,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1243,
                'endLine' => 1243,
                'startTokenPos' => 5053,
                'startFilePos' => 38266,
                'endTokenPos' => 5053,
                'endFilePos' => 38270,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1243,
            'endLine' => 1243,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1243,
                'endLine' => 1243,
                'startTokenPos' => 5060,
                'startFilePos' => 38280,
                'endTokenPos' => 5060,
                'endFilePos' => 38284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1243,
            'endLine' => 1243,
            'startColumn' => 90,
            'endColumn' => 101,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1243,
        'endLine' => 1256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereLike' => 
      array (
        'name' => 'orWhereLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1266,
            'endLine' => 1266,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1266,
            'endLine' => 1266,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1266,
                'endLine' => 1266,
                'startTokenPos' => 5169,
                'startFilePos' => 38956,
                'endTokenPos' => 5169,
                'endFilePos' => 38960,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1266,
            'endLine' => 1266,
            'startColumn' => 50,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @return $this
 */',
        'startLine' => 1266,
        'endLine' => 1269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotLike' => 
      array (
        'name' => 'whereNotLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1280,
            'endLine' => 1280,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1280,
            'endLine' => 1280,
            'startColumn' => 43,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1280,
                'endLine' => 1280,
                'startTokenPos' => 5216,
                'startFilePos' => 39394,
                'endTokenPos' => 5216,
                'endFilePos' => 39398,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1280,
            'endLine' => 1280,
            'startColumn' => 51,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1280,
                'endLine' => 1280,
                'startTokenPos' => 5223,
                'startFilePos' => 39412,
                'endTokenPos' => 5223,
                'endFilePos' => 39416,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1280,
            'endLine' => 1280,
            'startColumn' => 75,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1280,
        'endLine' => 1283,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotLike' => 
      array (
        'name' => 'orWhereNotLike',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1293,
            'endLine' => 1293,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1293,
            'endLine' => 1293,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1293,
                'endLine' => 1293,
                'startTokenPos' => 5270,
                'startFilePos' => 39827,
                'endTokenPos' => 5270,
                'endFilePos' => 39831,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1293,
            'endLine' => 1293,
            'startColumn' => 53,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not like" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $value
 * @param  bool  $caseSensitive
 * @return $this
 */',
        'startLine' => 1293,
        'endLine' => 1296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1307,
                'endLine' => 1307,
                'startTokenPos' => 5314,
                'startFilePos' => 40235,
                'endTokenPos' => 5314,
                'endFilePos' => 40239,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1307,
                'endLine' => 1307,
                'startTokenPos' => 5321,
                'startFilePos' => 40249,
                'endTokenPos' => 5321,
                'endFilePos' => 40253,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1307,
            'endLine' => 1307,
            'startColumn' => 65,
            'endColumn' => 76,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1307,
        'endLine' => 1341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIn' => 
      array (
        'name' => 'orWhereIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1350,
            'endLine' => 1350,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1350,
            'endLine' => 1350,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @return $this
 */',
        'startLine' => 1350,
        'endLine' => 1353,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1363,
            'endLine' => 1363,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1363,
            'endLine' => 1363,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1363,
                'endLine' => 1363,
                'startTokenPos' => 5577,
                'startFilePos' => 42364,
                'endTokenPos' => 5577,
                'endFilePos' => 42368,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1363,
            'endLine' => 1363,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1363,
        'endLine' => 1366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotIn' => 
      array (
        'name' => 'orWhereNotIn',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1375,
            'endLine' => 1375,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1375,
            'endLine' => 1375,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not in" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  mixed  $values
 * @return $this
 */',
        'startLine' => 1375,
        'endLine' => 1378,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIntegerInRaw' => 
      array (
        'name' => 'whereIntegerInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1389,
            'endLine' => 1389,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1389,
            'endLine' => 1389,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1389,
                'endLine' => 1389,
                'startTokenPos' => 5655,
                'startFilePos' => 43115,
                'endTokenPos' => 5655,
                'endFilePos' => 43119,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1389,
            'endLine' => 1389,
            'startColumn' => 57,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1389,
                'endLine' => 1389,
                'startTokenPos' => 5662,
                'startFilePos' => 43129,
                'endTokenPos' => 5662,
                'endFilePos' => 43133,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1389,
            'endLine' => 1389,
            'startColumn' => 75,
            'endColumn' => 86,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1389,
        'endLine' => 1406,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIntegerInRaw' => 
      array (
        'name' => 'orWhereIntegerInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1415,
            'endLine' => 1415,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1415,
            'endLine' => 1415,
            'startColumn' => 50,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 1415,
        'endLine' => 1418,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereIntegerNotInRaw' => 
      array (
        'name' => 'whereIntegerNotInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1428,
                'endLine' => 1428,
                'startTokenPos' => 5841,
                'startFilePos' => 44237,
                'endTokenPos' => 5841,
                'endFilePos' => 44241,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1428,
            'endLine' => 1428,
            'startColumn' => 60,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1428,
        'endLine' => 1431,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereIntegerNotInRaw' => 
      array (
        'name' => 'orWhereIntegerNotInRaw',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 53,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|array  $values
 * @return $this
 */',
        'startLine' => 1440,
        'endLine' => 1443,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNull' => 
      array (
        'name' => 'whereNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1453,
            'endLine' => 1453,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1453,
                'endLine' => 1453,
                'startTokenPos' => 5916,
                'startFilePos' => 44981,
                'endTokenPos' => 5916,
                'endFilePos' => 44985,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1453,
            'endLine' => 1453,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1453,
                'endLine' => 1453,
                'startTokenPos' => 5923,
                'startFilePos' => 44995,
                'endTokenPos' => 5923,
                'endFilePos' => 44999,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1453,
            'endLine' => 1453,
            'startColumn' => 59,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1453,
        'endLine' => 1462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNull' => 
      array (
        'name' => 'orWhereNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1470,
            'endLine' => 1470,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $column
 * @return $this
 */',
        'startLine' => 1470,
        'endLine' => 1473,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotNull' => 
      array (
        'name' => 'whereNotNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1482,
            'endLine' => 1482,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1482,
                'endLine' => 1482,
                'startTokenPos' => 6032,
                'startFilePos' => 45760,
                'endTokenPos' => 6032,
                'endFilePos' => 45764,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1482,
            'endLine' => 1482,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not null" clause to the query.
 *
 * @param  string|array|\\Illuminate\\Contracts\\Database\\Query\\Expression  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1482,
        'endLine' => 1485,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereBetween' => 
      array (
        'name' => 'whereBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1495,
            'endLine' => 1495,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1495,
            'endLine' => 1495,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1495,
                'endLine' => 1495,
                'startTokenPos' => 6075,
                'startFilePos' => 46220,
                'endTokenPos' => 6075,
                'endFilePos' => 46224,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1495,
            'endLine' => 1495,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1495,
                'endLine' => 1495,
                'startTokenPos' => 6082,
                'startFilePos' => 46234,
                'endTokenPos' => 6082,
                'endFilePos' => 46238,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1495,
            'endLine' => 1495,
            'startColumn' => 79,
            'endColumn' => 90,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1495,
        'endLine' => 1515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereBetweenColumns' => 
      array (
        'name' => 'whereBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1525,
                'endLine' => 1525,
                'startTokenPos' => 6280,
                'startFilePos' => 47198,
                'endTokenPos' => 6280,
                'endFilePos' => 47202,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1525,
                'endLine' => 1525,
                'startTokenPos' => 6287,
                'startFilePos' => 47212,
                'endTokenPos' => 6287,
                'endFilePos' => 47216,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1525,
            'endLine' => 1525,
            'startColumn' => 83,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1525,
        'endLine' => 1532,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereBetween' => 
      array (
        'name' => 'orWhereBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1540,
            'endLine' => 1540,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1540,
            'endLine' => 1540,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1540,
        'endLine' => 1543,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereBetweenColumns' => 
      array (
        'name' => 'orWhereBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1551,
            'endLine' => 1551,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1551,
            'endLine' => 1551,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1551,
        'endLine' => 1554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotBetween' => 
      array (
        'name' => 'whereNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1563,
            'endLine' => 1563,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1563,
            'endLine' => 1563,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1563,
                'endLine' => 1563,
                'startTokenPos' => 6424,
                'startFilePos' => 48464,
                'endTokenPos' => 6424,
                'endFilePos' => 48468,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1563,
            'endLine' => 1563,
            'startColumn' => 64,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1563,
        'endLine' => 1566,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotBetweenColumns' => 
      array (
        'name' => 'whereNotBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1575,
            'endLine' => 1575,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1575,
            'endLine' => 1575,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1575,
                'endLine' => 1575,
                'startTokenPos' => 6470,
                'startFilePos' => 48858,
                'endTokenPos' => 6470,
                'endFilePos' => 48862,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1575,
            'endLine' => 1575,
            'startColumn' => 68,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1575,
        'endLine' => 1578,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotBetween' => 
      array (
        'name' => 'orWhereNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1586,
            'endLine' => 1586,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1586,
            'endLine' => 1586,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between" statement to the query.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1586,
        'endLine' => 1589,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotBetweenColumns' => 
      array (
        'name' => 'orWhereNotBetweenColumns',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1597,
            'endLine' => 1597,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 1597,
            'endLine' => 1597,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between" statement using columns to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1597,
        'endLine' => 1600,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereValueBetween' => 
      array (
        'name' => 'whereValueBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1611,
            'endLine' => 1611,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1611,
            'endLine' => 1611,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1611,
                'endLine' => 1611,
                'startTokenPos' => 6588,
                'startFilePos' => 50128,
                'endTokenPos' => 6588,
                'endFilePos' => 50132,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1611,
            'endLine' => 1611,
            'startColumn' => 63,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1611,
                'endLine' => 1611,
                'startTokenPos' => 6595,
                'startFilePos' => 50142,
                'endTokenPos' => 6595,
                'endFilePos' => 50146,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1611,
            'endLine' => 1611,
            'startColumn' => 81,
            'endColumn' => 92,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 1611,
        'endLine' => 1620,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereValueBetween' => 
      array (
        'name' => 'orWhereValueBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1629,
            'endLine' => 1629,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1629,
            'endLine' => 1629,
            'startColumn' => 49,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @return $this
 */',
        'startLine' => 1629,
        'endLine' => 1632,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereValueNotBetween' => 
      array (
        'name' => 'whereValueNotBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1642,
            'endLine' => 1642,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1642,
            'endLine' => 1642,
            'startColumn' => 50,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1642,
                'endLine' => 1642,
                'startTokenPos' => 6707,
                'startFilePos' => 51184,
                'endTokenPos' => 6707,
                'endFilePos' => 51188,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1642,
            'endLine' => 1642,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1642,
        'endLine' => 1645,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereValueNotBetween' => 
      array (
        'name' => 'orWhereValueNotBetween',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1654,
            'endLine' => 1654,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 1654,
            'endLine' => 1654,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not between columns" statement using a value to the query.
 *
 * @param  mixed  $value
 * @param  array{\\Illuminate\\Contracts\\Database\\Query\\Expression|string, \\Illuminate\\Contracts\\Database\\Query\\Expression|string}  $columns
 * @return $this
 */',
        'startLine' => 1654,
        'endLine' => 1657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotNull' => 
      array (
        'name' => 'orWhereNotNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1665,
            'endLine' => 1665,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not null" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 1665,
        'endLine' => 1668,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereDate' => 
      array (
        'name' => 'whereDate',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1679,
            'endLine' => 1679,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1679,
            'endLine' => 1679,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1679,
                'endLine' => 1679,
                'startTokenPos' => 6815,
                'startFilePos' => 52387,
                'endTokenPos' => 6815,
                'endFilePos' => 52390,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1679,
            'endLine' => 1679,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1679,
                'endLine' => 1679,
                'startTokenPos' => 6822,
                'startFilePos' => 52404,
                'endTokenPos' => 6822,
                'endFilePos' => 52408,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1679,
            'endLine' => 1679,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where date" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1679,
        'endLine' => 1699,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereDate' => 
      array (
        'name' => 'orWhereDate',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1709,
            'endLine' => 1709,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1709,
            'endLine' => 1709,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1709,
                'endLine' => 1709,
                'startTokenPos' => 6976,
                'startFilePos' => 53498,
                'endTokenPos' => 6976,
                'endFilePos' => 53501,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1709,
            'endLine' => 1709,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where date" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @return $this
 */',
        'startLine' => 1709,
        'endLine' => 1716,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereTime' => 
      array (
        'name' => 'whereTime',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1727,
            'endLine' => 1727,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1727,
            'endLine' => 1727,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1727,
                'endLine' => 1727,
                'startTokenPos' => 7051,
                'startFilePos' => 54086,
                'endTokenPos' => 7051,
                'endFilePos' => 54089,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1727,
            'endLine' => 1727,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1727,
                'endLine' => 1727,
                'startTokenPos' => 7058,
                'startFilePos' => 54103,
                'endTokenPos' => 7058,
                'endFilePos' => 54107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1727,
            'endLine' => 1727,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where time" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1727,
        'endLine' => 1747,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereTime' => 
      array (
        'name' => 'orWhereTime',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1757,
            'endLine' => 1757,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1757,
            'endLine' => 1757,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1757,
                'endLine' => 1757,
                'startTokenPos' => 7212,
                'startFilePos' => 55197,
                'endTokenPos' => 7212,
                'endFilePos' => 55200,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1757,
            'endLine' => 1757,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where time" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|null  $operator
 * @param  \\DateTimeInterface|string|null  $value
 * @return $this
 */',
        'startLine' => 1757,
        'endLine' => 1764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereDay' => 
      array (
        'name' => 'whereDay',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1775,
            'endLine' => 1775,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1775,
            'endLine' => 1775,
            'startColumn' => 39,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1775,
                'endLine' => 1775,
                'startTokenPos' => 7287,
                'startFilePos' => 55791,
                'endTokenPos' => 7287,
                'endFilePos' => 55794,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1775,
            'endLine' => 1775,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1775,
                'endLine' => 1775,
                'startTokenPos' => 7294,
                'startFilePos' => 55808,
                'endTokenPos' => 7294,
                'endFilePos' => 55812,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1775,
            'endLine' => 1775,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where day" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1775,
        'endLine' => 1799,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereDay' => 
      array (
        'name' => 'orWhereDay',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1809,
            'endLine' => 1809,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1809,
            'endLine' => 1809,
            'startColumn' => 41,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1809,
                'endLine' => 1809,
                'startTokenPos' => 7477,
                'startFilePos' => 57014,
                'endTokenPos' => 7477,
                'endFilePos' => 57017,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1809,
            'endLine' => 1809,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where day" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 1809,
        'endLine' => 1816,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereMonth' => 
      array (
        'name' => 'whereMonth',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 32,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 41,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1827,
                'endLine' => 1827,
                'startTokenPos' => 7552,
                'startFilePos' => 57611,
                'endTokenPos' => 7552,
                'endFilePos' => 57614,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 52,
            'endColumn' => 64,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1827,
                'endLine' => 1827,
                'startTokenPos' => 7559,
                'startFilePos' => 57628,
                'endTokenPos' => 7559,
                'endFilePos' => 57632,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 67,
            'endColumn' => 82,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where month" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1827,
        'endLine' => 1851,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereMonth' => 
      array (
        'name' => 'orWhereMonth',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1861,
            'endLine' => 1861,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1861,
            'endLine' => 1861,
            'startColumn' => 43,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1861,
                'endLine' => 1861,
                'startTokenPos' => 7742,
                'startFilePos' => 58840,
                'endTokenPos' => 7742,
                'endFilePos' => 58843,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1861,
            'endLine' => 1861,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where month" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 1861,
        'endLine' => 1868,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereYear' => 
      array (
        'name' => 'whereYear',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1879,
            'endLine' => 1879,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1879,
            'endLine' => 1879,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1879,
                'endLine' => 1879,
                'startTokenPos' => 7817,
                'startFilePos' => 59437,
                'endTokenPos' => 7817,
                'endFilePos' => 59440,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1879,
            'endLine' => 1879,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1879,
                'endLine' => 1879,
                'startTokenPos' => 7824,
                'startFilePos' => 59454,
                'endTokenPos' => 7824,
                'endFilePos' => 59458,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1879,
            'endLine' => 1879,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where year" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1879,
        'endLine' => 1899,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereYear' => 
      array (
        'name' => 'orWhereYear',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1909,
            'endLine' => 1909,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1909,
            'endLine' => 1909,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1909,
                'endLine' => 1909,
                'startTokenPos' => 7978,
                'startFilePos' => 60552,
                'endTokenPos' => 7978,
                'endFilePos' => 60555,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1909,
            'endLine' => 1909,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where year" statement to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\DateTimeInterface|string|int|null  $operator
 * @param  \\DateTimeInterface|string|int|null  $value
 * @return $this
 */',
        'startLine' => 1909,
        'endLine' => 1916,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addDateBasedWhere' => 
      array (
        'name' => 'addDateBasedWhere',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1928,
            'endLine' => 1928,
            'startColumn' => 42,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1928,
            'endLine' => 1928,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1928,
            'endLine' => 1928,
            'startColumn' => 58,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1928,
            'endLine' => 1928,
            'startColumn' => 69,
            'endColumn' => 74,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1928,
                'endLine' => 1928,
                'startTokenPos' => 8059,
                'startFilePos' => 61171,
                'endTokenPos' => 8059,
                'endFilePos' => 61175,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1928,
            'endLine' => 1928,
            'startColumn' => 77,
            'endColumn' => 92,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a date based (year, month, day, time) statement to the query.
 *
 * @param  string  $type
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1928,
        'endLine' => 1937,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNested' => 
      array (
        'name' => 'whereNested',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1945,
                'endLine' => 1945,
                'startTokenPos' => 8141,
                'startFilePos' => 61602,
                'endTokenPos' => 8141,
                'endFilePos' => 61606,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1945,
            'endLine' => 1945,
            'startColumn' => 52,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a nested "where" statement to the query.
 *
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1945,
        'endLine' => 1950,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forNestedWhere' => 
      array (
        'name' => 'forNestedWhere',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query instance for nested where condition.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 1957,
        'endLine' => 1960,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addNestedWhereQuery' => 
      array (
        'name' => 'addNestedWhereQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1969,
            'endLine' => 1969,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 1969,
                'endLine' => 1969,
                'startTokenPos' => 8220,
                'startFilePos' => 62242,
                'endTokenPos' => 8220,
                'endFilePos' => 62246,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1969,
            'endLine' => 1969,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add another query builder as a nested where to the query builder.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1969,
        'endLine' => 1980,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereSub' => 
      array (
        'name' => 'whereSub',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1991,
            'endLine' => 1991,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1991,
            'endLine' => 1991,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1991,
            'endLine' => 1991,
            'startColumn' => 53,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1991,
            'endLine' => 1991,
            'startColumn' => 64,
            'endColumn' => 71,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a full sub-select to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $operator
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 1991,
        'endLine' => 2011,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereExists' => 
      array (
        'name' => 'whereExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2021,
            'endLine' => 2021,
            'startColumn' => 33,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2021,
                'endLine' => 2021,
                'startTokenPos' => 8449,
                'startFilePos' => 63937,
                'endTokenPos' => 8449,
                'endFilePos' => 63941,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2021,
            'endLine' => 2021,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2021,
                'endLine' => 2021,
                'startTokenPos' => 8456,
                'startFilePos' => 63951,
                'endTokenPos' => 8456,
                'endFilePos' => 63955,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2021,
            'endLine' => 2021,
            'startColumn' => 62,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2021,
        'endLine' => 2035,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereExists' => 
      array (
        'name' => 'orWhereExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2044,
            'endLine' => 2044,
            'startColumn' => 35,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2044,
                'endLine' => 2044,
                'startTokenPos' => 8560,
                'startFilePos' => 64819,
                'endTokenPos' => 8560,
                'endFilePos' => 64823,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2044,
            'endLine' => 2044,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2044,
        'endLine' => 2047,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNotExists' => 
      array (
        'name' => 'whereNotExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2056,
            'endLine' => 2056,
            'startColumn' => 36,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2056,
                'endLine' => 2056,
                'startTokenPos' => 8598,
                'startFilePos' => 65194,
                'endTokenPos' => 8598,
                'endFilePos' => 65198,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2056,
            'endLine' => 2056,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2056,
        'endLine' => 2059,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNotExists' => 
      array (
        'name' => 'orWhereNotExists',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2067,
            'endLine' => 2067,
            'startColumn' => 38,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not exists" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $callback
 * @return $this
 */',
        'startLine' => 2067,
        'endLine' => 2070,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addWhereExistsQuery' => 
      array (
        'name' => 'addWhereExistsQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2079,
            'endLine' => 2079,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2079,
                'endLine' => 2079,
                'startTokenPos' => 8666,
                'startFilePos' => 65813,
                'endTokenPos' => 8666,
                'endFilePos' => 65817,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2079,
            'endLine' => 2079,
            'startColumn' => 54,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2079,
                'endLine' => 2079,
                'startTokenPos' => 8673,
                'startFilePos' => 65827,
                'endTokenPos' => 8673,
                'endFilePos' => 65831,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2079,
            'endLine' => 2079,
            'startColumn' => 72,
            'endColumn' => 83,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "exists" clause to the query.
 *
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2079,
        'endLine' => 2088,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereRowValues' => 
      array (
        'name' => 'whereRowValues',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2101,
            'endLine' => 2101,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2101,
            'endLine' => 2101,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2101,
            'endLine' => 2101,
            'startColumn' => 57,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2101,
                'endLine' => 2101,
                'startTokenPos' => 8756,
                'startFilePos' => 66383,
                'endTokenPos' => 8756,
                'endFilePos' => 66387,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2101,
            'endLine' => 2101,
            'startColumn' => 66,
            'endColumn' => 81,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a where condition using row values.
 *
 * @param  array  $columns
 * @param  string  $operator
 * @param  array  $values
 * @param  string  $boolean
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 2101,
        'endLine' => 2114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereRowValues' => 
      array (
        'name' => 'orWhereRowValues',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2124,
            'endLine' => 2124,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2124,
            'endLine' => 2124,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2124,
            'endLine' => 2124,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds an or where condition using row values.
 *
 * @param  array  $columns
 * @param  string  $operator
 * @param  array  $values
 * @return $this
 */',
        'startLine' => 2124,
        'endLine' => 2127,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonContains' => 
      array (
        'name' => 'whereJsonContains',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2138,
            'endLine' => 2138,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2138,
            'endLine' => 2138,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2138,
                'endLine' => 2138,
                'startTokenPos' => 8902,
                'startFilePos' => 67396,
                'endTokenPos' => 8902,
                'endFilePos' => 67400,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2138,
            'endLine' => 2138,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2138,
                'endLine' => 2138,
                'startTokenPos' => 8909,
                'startFilePos' => 67410,
                'endTokenPos' => 8909,
                'endFilePos' => 67414,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2138,
            'endLine' => 2138,
            'startColumn' => 74,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2138,
        'endLine' => 2149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonContains' => 
      array (
        'name' => 'orWhereJsonContains',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2158,
            'endLine' => 2158,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2158,
            'endLine' => 2158,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2158,
        'endLine' => 2161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntContain' => 
      array (
        'name' => 'whereJsonDoesntContain',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2171,
            'endLine' => 2171,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2171,
            'endLine' => 2171,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2171,
                'endLine' => 2171,
                'startTokenPos' => 9037,
                'startFilePos' => 68282,
                'endTokenPos' => 9037,
                'endFilePos' => 68286,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2171,
            'endLine' => 2171,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2171,
        'endLine' => 2174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntContain' => 
      array (
        'name' => 'orWhereJsonDoesntContain',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2183,
            'endLine' => 2183,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2183,
            'endLine' => 2183,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2183,
        'endLine' => 2186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonOverlaps' => 
      array (
        'name' => 'whereJsonOverlaps',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 48,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2197,
                'endLine' => 2197,
                'startTokenPos' => 9115,
                'startFilePos' => 68972,
                'endTokenPos' => 9115,
                'endFilePos' => 68976,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2197,
                'endLine' => 2197,
                'startTokenPos' => 9122,
                'startFilePos' => 68986,
                'endTokenPos' => 9122,
                'endFilePos' => 68990,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2197,
            'endLine' => 2197,
            'startColumn' => 74,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON overlaps" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2197,
        'endLine' => 2208,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonOverlaps' => 
      array (
        'name' => 'orWhereJsonOverlaps',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2217,
            'endLine' => 2217,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2217,
            'endLine' => 2217,
            'startColumn' => 50,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON overlaps" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2217,
        'endLine' => 2220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntOverlap' => 
      array (
        'name' => 'whereJsonDoesntOverlap',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2230,
            'endLine' => 2230,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2230,
            'endLine' => 2230,
            'startColumn' => 53,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2230,
                'endLine' => 2230,
                'startTokenPos' => 9250,
                'startFilePos' => 69857,
                'endTokenPos' => 9250,
                'endFilePos' => 69861,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2230,
            'endLine' => 2230,
            'startColumn' => 61,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON not overlap" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2230,
        'endLine' => 2233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntOverlap' => 
      array (
        'name' => 'orWhereJsonDoesntOverlap',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2242,
            'endLine' => 2242,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2242,
            'endLine' => 2242,
            'startColumn' => 55,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON not overlap" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2242,
        'endLine' => 2245,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonContainsKey' => 
      array (
        'name' => 'whereJsonContainsKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2255,
            'endLine' => 2255,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2255,
                'endLine' => 2255,
                'startTokenPos' => 9325,
                'startFilePos' => 70528,
                'endTokenPos' => 9325,
                'endFilePos' => 70532,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2255,
            'endLine' => 2255,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2255,
                'endLine' => 2255,
                'startTokenPos' => 9332,
                'startFilePos' => 70542,
                'endTokenPos' => 9332,
                'endFilePos' => 70546,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2255,
            'endLine' => 2255,
            'startColumn' => 69,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a clause that determines if a JSON path exists to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2255,
        'endLine' => 2262,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonContainsKey' => 
      array (
        'name' => 'orWhereJsonContainsKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2270,
            'endLine' => 2270,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or" clause that determines if a JSON path exists to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2270,
        'endLine' => 2273,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonDoesntContainKey' => 
      array (
        'name' => 'whereJsonDoesntContainKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2282,
            'endLine' => 2282,
            'startColumn' => 47,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2282,
                'endLine' => 2282,
                'startTokenPos' => 9417,
                'startFilePos' => 71222,
                'endTokenPos' => 9417,
                'endFilePos' => 71226,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2282,
            'endLine' => 2282,
            'startColumn' => 56,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a clause that determines if a JSON path does not exist to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2282,
        'endLine' => 2285,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonDoesntContainKey' => 
      array (
        'name' => 'orWhereJsonDoesntContainKey',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2293,
            'endLine' => 2293,
            'startColumn' => 49,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or" clause that determines if a JSON path does not exist to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2293,
        'endLine' => 2296,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereJsonLength' => 
      array (
        'name' => 'whereJsonLength',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2307,
            'endLine' => 2307,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2307,
            'endLine' => 2307,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2307,
                'endLine' => 2307,
                'startTokenPos' => 9486,
                'startFilePos' => 71893,
                'endTokenPos' => 9486,
                'endFilePos' => 71896,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2307,
            'endLine' => 2307,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2307,
                'endLine' => 2307,
                'startTokenPos' => 9493,
                'startFilePos' => 71910,
                'endTokenPos' => 9493,
                'endFilePos' => 71914,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2307,
            'endLine' => 2307,
            'startColumn' => 72,
            'endColumn' => 87,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2307,
        'endLine' => 2329,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereJsonLength' => 
      array (
        'name' => 'orWhereJsonLength',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2339,
            'endLine' => 2339,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2339,
            'endLine' => 2339,
            'startColumn' => 48,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2339,
                'endLine' => 2339,
                'startTokenPos' => 9656,
                'startFilePos' => 72944,
                'endTokenPos' => 9656,
                'endFilePos' => 72947,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2339,
            'endLine' => 2339,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2339,
        'endLine' => 2346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dynamicWhere' => 
      array (
        'name' => 'dynamicWhere',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2355,
            'endLine' => 2355,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2355,
            'endLine' => 2355,
            'startColumn' => 43,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handles dynamic "where" clauses to the query.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return $this
 */',
        'startLine' => 2355,
        'endLine' => 2389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addDynamic' => 
      array (
        'name' => 'addDynamic',
        'parameters' => 
        array (
          'segment' => 
          array (
            'name' => 'segment',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'connector' => 
          array (
            'name' => 'connector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 57,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2400,
            'endLine' => 2400,
            'startColumn' => 70,
            'endColumn' => 75,
            'parameterIndex' => 3,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a single dynamic "where" clause statement to the query.
 *
 * @param  string  $segment
 * @param  string  $connector
 * @param  array  $parameters
 * @param  int  $index
 * @return void
 */',
        'startLine' => 2400,
        'endLine' => 2408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereFullText' => 
      array (
        'name' => 'whereFullText',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2418,
            'endLine' => 2418,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2418,
            'endLine' => 2418,
            'startColumn' => 45,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2418,
                'endLine' => 2418,
                'startTokenPos' => 9958,
                'startFilePos' => 75685,
                'endTokenPos' => 9959,
                'endFilePos' => 75686,
              ),
            ),
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
            'startLine' => 2418,
            'endLine' => 2418,
            'startColumn' => 53,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2418,
                'endLine' => 2418,
                'startTokenPos' => 9966,
                'startFilePos' => 75700,
                'endTokenPos' => 9966,
                'endFilePos' => 75704,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2418,
            'endLine' => 2418,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where fulltext" clause to the query.
 *
 * @param  string|string[]  $columns
 * @param  string  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2418,
        'endLine' => 2429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereFullText' => 
      array (
        'name' => 'orWhereFullText',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2438,
            'endLine' => 2438,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2438,
            'endLine' => 2438,
            'startColumn' => 47,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2438,
                'endLine' => 2438,
                'startTokenPos' => 10048,
                'startFilePos' => 76172,
                'endTokenPos' => 10049,
                'endFilePos' => 76173,
              ),
            ),
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
            'startLine' => 2438,
            'endLine' => 2438,
            'startColumn' => 55,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where fulltext" clause to the query.
 *
 * @param  string|string[]  $columns
 * @param  string  $value
 * @return $this
 */',
        'startLine' => 2438,
        'endLine' => 2441,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereAll' => 
      array (
        'name' => 'whereAll',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2452,
            'endLine' => 2452,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2452,
                'endLine' => 2452,
                'startTokenPos' => 10090,
                'startFilePos' => 76641,
                'endTokenPos' => 10090,
                'endFilePos' => 76644,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2452,
            'endLine' => 2452,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2452,
                'endLine' => 2452,
                'startTokenPos' => 10097,
                'startFilePos' => 76656,
                'endTokenPos' => 10097,
                'endFilePos' => 76659,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2452,
            'endLine' => 2452,
            'startColumn' => 58,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2452,
                'endLine' => 2452,
                'startTokenPos' => 10104,
                'startFilePos' => 76673,
                'endTokenPos' => 10104,
                'endFilePos' => 76677,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2452,
            'endLine' => 2452,
            'startColumn' => 73,
            'endColumn' => 88,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause to the query for multiple columns with "and" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2452,
        'endLine' => 2465,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereAll' => 
      array (
        'name' => 'orWhereAll',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2475,
            'endLine' => 2475,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2475,
                'endLine' => 2475,
                'startTokenPos' => 10224,
                'startFilePos' => 77425,
                'endTokenPos' => 10224,
                'endFilePos' => 77428,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2475,
            'endLine' => 2475,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2475,
                'endLine' => 2475,
                'startTokenPos' => 10231,
                'startFilePos' => 77440,
                'endTokenPos' => 10231,
                'endFilePos' => 77443,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2475,
            'endLine' => 2475,
            'startColumn' => 60,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query for multiple columns with "and" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2475,
        'endLine' => 2478,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereAny' => 
      array (
        'name' => 'whereAny',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2489,
            'endLine' => 2489,
            'startColumn' => 30,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2489,
                'endLine' => 2489,
                'startTokenPos' => 10272,
                'startFilePos' => 77906,
                'endTokenPos' => 10272,
                'endFilePos' => 77909,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2489,
            'endLine' => 2489,
            'startColumn' => 40,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2489,
                'endLine' => 2489,
                'startTokenPos' => 10279,
                'startFilePos' => 77921,
                'endTokenPos' => 10279,
                'endFilePos' => 77924,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2489,
            'endLine' => 2489,
            'startColumn' => 58,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2489,
                'endLine' => 2489,
                'startTokenPos' => 10286,
                'startFilePos' => 77938,
                'endTokenPos' => 10286,
                'endFilePos' => 77942,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2489,
            'endLine' => 2489,
            'startColumn' => 73,
            'endColumn' => 88,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where" clause to the query for multiple columns with "or" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2489,
        'endLine' => 2502,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereAny' => 
      array (
        'name' => 'orWhereAny',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2512,
            'endLine' => 2512,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2512,
                'endLine' => 2512,
                'startTokenPos' => 10406,
                'startFilePos' => 78688,
                'endTokenPos' => 10406,
                'endFilePos' => 78691,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2512,
            'endLine' => 2512,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2512,
                'endLine' => 2512,
                'startTokenPos' => 10413,
                'startFilePos' => 78703,
                'endTokenPos' => 10413,
                'endFilePos' => 78706,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2512,
            'endLine' => 2512,
            'startColumn' => 60,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where" clause to the query for multiple columns with "or" conditions between them.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2512,
        'endLine' => 2515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'whereNone' => 
      array (
        'name' => 'whereNone',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2526,
            'endLine' => 2526,
            'startColumn' => 31,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2526,
                'endLine' => 2526,
                'startTokenPos' => 10454,
                'startFilePos' => 79184,
                'endTokenPos' => 10454,
                'endFilePos' => 79187,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2526,
            'endLine' => 2526,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2526,
                'endLine' => 2526,
                'startTokenPos' => 10461,
                'startFilePos' => 79199,
                'endTokenPos' => 10461,
                'endFilePos' => 79202,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2526,
            'endLine' => 2526,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2526,
                'endLine' => 2526,
                'startTokenPos' => 10468,
                'startFilePos' => 79216,
                'endTokenPos' => 10468,
                'endFilePos' => 79220,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2526,
            'endLine' => 2526,
            'startColumn' => 74,
            'endColumn' => 89,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "where not" clause to the query for multiple columns where none of the conditions should be true.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2526,
        'endLine' => 2529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orWhereNone' => 
      array (
        'name' => 'orWhereNone',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2539,
            'endLine' => 2539,
            'startColumn' => 33,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2539,
                'endLine' => 2539,
                'startTokenPos' => 10511,
                'startFilePos' => 79683,
                'endTokenPos' => 10511,
                'endFilePos' => 79686,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2539,
            'endLine' => 2539,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2539,
                'endLine' => 2539,
                'startTokenPos' => 10518,
                'startFilePos' => 79698,
                'endTokenPos' => 10518,
                'endFilePos' => 79701,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2539,
            'endLine' => 2539,
            'startColumn' => 61,
            'endColumn' => 73,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or where not" clause to the query for multiple columns where none of the conditions should be true.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression[]|\\Closure[]|string[]  $columns
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return $this
 */',
        'startLine' => 2539,
        'endLine' => 2542,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupBy' => 
      array (
        'name' => 'groupBy',
        'parameters' => 
        array (
          'groups' => 
          array (
            'name' => 'groups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2550,
            'endLine' => 2550,
            'startColumn' => 29,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "group by" clause to the query.
 *
 * @param  array|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  ...$groups
 * @return $this
 */',
        'startLine' => 2550,
        'endLine' => 2560,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupByRaw' => 
      array (
        'name' => 'groupByRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2568,
            'endLine' => 2568,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2568,
                'endLine' => 2568,
                'startTokenPos' => 10622,
                'startFilePos' => 80390,
                'endTokenPos' => 10623,
                'endFilePos' => 80391,
              ),
            ),
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
            'startLine' => 2568,
            'endLine' => 2568,
            'startColumn' => 38,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "groupBy" clause to the query.
 *
 * @param  string  $sql
 * @return $this
 */',
        'startLine' => 2568,
        'endLine' => 2575,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'having' => 
      array (
        'name' => 'having',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2586,
            'endLine' => 2586,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2586,
                'endLine' => 2586,
                'startTokenPos' => 10677,
                'startFilePos' => 80962,
                'endTokenPos' => 10677,
                'endFilePos' => 80965,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2586,
            'endLine' => 2586,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2586,
                'endLine' => 2586,
                'startTokenPos' => 10684,
                'startFilePos' => 80977,
                'endTokenPos' => 10684,
                'endFilePos' => 80980,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2586,
            'endLine' => 2586,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2586,
                'endLine' => 2586,
                'startTokenPos' => 10691,
                'startFilePos' => 80994,
                'endTokenPos' => 10691,
                'endFilePos' => 80998,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2586,
            'endLine' => 2586,
            'startColumn' => 70,
            'endColumn' => 85,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\Closure|string  $column
 * @param  \\DateTimeInterface|string|int|float|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\DateTimeInterface|string|int|float|null  $value
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2586,
        'endLine' => 2627,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHaving' => 
      array (
        'name' => 'orHaving',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2637,
            'endLine' => 2637,
            'startColumn' => 30,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2637,
                'endLine' => 2637,
                'startTokenPos' => 10960,
                'startFilePos' => 82851,
                'endTokenPos' => 10960,
                'endFilePos' => 82854,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2637,
            'endLine' => 2637,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2637,
                'endLine' => 2637,
                'startTokenPos' => 10967,
                'startFilePos' => 82866,
                'endTokenPos' => 10967,
                'endFilePos' => 82869,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2637,
            'endLine' => 2637,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\Closure|string  $column
 * @param  \\DateTimeInterface|string|int|float|null  $operator
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|\\DateTimeInterface|string|int|float|null  $value
 * @return $this
 */',
        'startLine' => 2637,
        'endLine' => 2644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNested' => 
      array (
        'name' => 'havingNested',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2652,
            'endLine' => 2652,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2652,
                'endLine' => 2652,
                'startTokenPos' => 11041,
                'startFilePos' => 83268,
                'endTokenPos' => 11041,
                'endFilePos' => 83272,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2652,
            'endLine' => 2652,
            'startColumn' => 53,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a nested "having" statement to the query.
 *
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2652,
        'endLine' => 2657,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addNestedHavingQuery' => 
      array (
        'name' => 'addNestedHavingQuery',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2666,
            'endLine' => 2666,
            'startColumn' => 42,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2666,
                'endLine' => 2666,
                'startTokenPos' => 11090,
                'startFilePos' => 83672,
                'endTokenPos' => 11090,
                'endFilePos' => 83676,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2666,
            'endLine' => 2666,
            'startColumn' => 50,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add another query builder as a nested having to the query builder.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2666,
        'endLine' => 2677,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNull' => 
      array (
        'name' => 'havingNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2687,
            'endLine' => 2687,
            'startColumn' => 32,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2687,
                'endLine' => 2687,
                'startTokenPos' => 11177,
                'startFilePos' => 84180,
                'endTokenPos' => 11177,
                'endFilePos' => 84184,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2687,
            'endLine' => 2687,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2687,
                'endLine' => 2687,
                'startTokenPos' => 11184,
                'startFilePos' => 84194,
                'endTokenPos' => 11184,
                'endFilePos' => 84198,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2687,
            'endLine' => 2687,
            'startColumn' => 60,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having null" clause to the query.
 *
 * @param  array|string  $columns
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2687,
        'endLine' => 2696,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNull' => 
      array (
        'name' => 'orHavingNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2704,
            'endLine' => 2704,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having null" clause to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2704,
        'endLine' => 2707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNotNull' => 
      array (
        'name' => 'havingNotNull',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2716,
            'endLine' => 2716,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2716,
                'endLine' => 2716,
                'startTokenPos' => 11293,
                'startFilePos' => 84863,
                'endTokenPos' => 11293,
                'endFilePos' => 84867,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2716,
            'endLine' => 2716,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having not null" clause to the query.
 *
 * @param  array|string  $columns
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2716,
        'endLine' => 2719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNotNull' => 
      array (
        'name' => 'orHavingNotNull',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2727,
            'endLine' => 2727,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having not null" clause to the query.
 *
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 2727,
        'endLine' => 2730,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingBetween' => 
      array (
        'name' => 'havingBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2740,
            'endLine' => 2740,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2740,
            'endLine' => 2740,
            'startColumn' => 44,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2740,
                'endLine' => 2740,
                'startTokenPos' => 11364,
                'startFilePos' => 85440,
                'endTokenPos' => 11364,
                'endFilePos' => 85444,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2740,
            'endLine' => 2740,
            'startColumn' => 62,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'not' => 
          array (
            'name' => 'not',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 2740,
                'endLine' => 2740,
                'startTokenPos' => 11371,
                'startFilePos' => 85454,
                'endTokenPos' => 11371,
                'endFilePos' => 85458,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2740,
            'endLine' => 2740,
            'startColumn' => 80,
            'endColumn' => 91,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having between" clause to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @param  bool  $not
 * @return $this
 */',
        'startLine' => 2740,
        'endLine' => 2753,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingNotBetween' => 
      array (
        'name' => 'havingNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2763,
            'endLine' => 2763,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2763,
            'endLine' => 2763,
            'startColumn' => 47,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2763,
                'endLine' => 2763,
                'startTokenPos' => 11500,
                'startFilePos' => 86109,
                'endTokenPos' => 11500,
                'endFilePos' => 86113,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2763,
            'endLine' => 2763,
            'startColumn' => 65,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "having not between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2763,
        'endLine' => 2766,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingBetween' => 
      array (
        'name' => 'orHavingBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2775,
            'endLine' => 2775,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2775,
            'endLine' => 2775,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @return $this
 */',
        'startLine' => 2775,
        'endLine' => 2778,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingNotBetween' => 
      array (
        'name' => 'orHavingNotBetween',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2787,
            'endLine' => 2787,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'iterable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2787,
            'endLine' => 2787,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "or having not between" clause to the query.
 *
 * @param  string  $column
 * @param  iterable  $values
 * @return $this
 */',
        'startLine' => 2787,
        'endLine' => 2790,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'havingRaw' => 
      array (
        'name' => 'havingRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2799,
            'endLine' => 2799,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2799,
                'endLine' => 2799,
                'startTokenPos' => 11618,
                'startFilePos' => 87018,
                'endTokenPos' => 11619,
                'endFilePos' => 87019,
              ),
            ),
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
            'startLine' => 2799,
            'endLine' => 2799,
            'startColumn' => 37,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'boolean' => 
          array (
            'name' => 'boolean',
            'default' => 
            array (
              'code' => '\'and\'',
              'attributes' => 
              array (
                'startLine' => 2799,
                'endLine' => 2799,
                'startTokenPos' => 11626,
                'startFilePos' => 87033,
                'endTokenPos' => 11626,
                'endFilePos' => 87037,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2799,
            'endLine' => 2799,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "having" clause to the query.
 *
 * @param  string  $sql
 * @param  string  $boolean
 * @return $this
 */',
        'startLine' => 2799,
        'endLine' => 2808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orHavingRaw' => 
      array (
        'name' => 'orHavingRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2816,
            'endLine' => 2816,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2816,
                'endLine' => 2816,
                'startTokenPos' => 11693,
                'startFilePos' => 87389,
                'endTokenPos' => 11694,
                'endFilePos' => 87390,
              ),
            ),
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
            'startLine' => 2816,
            'endLine' => 2816,
            'startColumn' => 39,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "or having" clause to the query.
 *
 * @param  string  $sql
 * @return $this
 */',
        'startLine' => 2816,
        'endLine' => 2819,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderBy' => 
      array (
        'name' => 'orderBy',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2830,
            'endLine' => 2830,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\'asc\'',
              'attributes' => 
              array (
                'startLine' => 2830,
                'endLine' => 2830,
                'startTokenPos' => 11732,
                'startFilePos' => 87848,
                'endTokenPos' => 11732,
                'endFilePos' => 87852,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2830,
            'endLine' => 2830,
            'startColumn' => 38,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string  $direction
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 2830,
        'endLine' => 2852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByDesc' => 
      array (
        'name' => 'orderByDesc',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2860,
            'endLine' => 2860,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a descending "order by" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 2860,
        'endLine' => 2863,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'latest' => 
      array (
        'name' => 'latest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'created_at\'',
              'attributes' => 
              array (
                'startLine' => 2871,
                'endLine' => 2871,
                'startTokenPos' => 11938,
                'startFilePos' => 89133,
                'endTokenPos' => 11938,
                'endFilePos' => 89144,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2871,
            'endLine' => 2871,
            'startColumn' => 28,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 2871,
        'endLine' => 2874,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'oldest' => 
      array (
        'name' => 'oldest',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'created_at\'',
              'attributes' => 
              array (
                'startLine' => 2882,
                'endLine' => 2882,
                'startTokenPos' => 11970,
                'startFilePos' => 89474,
                'endTokenPos' => 11970,
                'endFilePos' => 89485,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2882,
            'endLine' => 2882,
            'startColumn' => 28,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return $this
 */',
        'startLine' => 2882,
        'endLine' => 2885,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByVectorDistance' => 
      array (
        'name' => 'orderByVectorDistance',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2894,
            'endLine' => 2894,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'vector' => 
          array (
            'name' => 'vector',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2894,
            'endLine' => 2894,
            'startColumn' => 52,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a vector-distance "order by" clause to the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  \\Illuminate\\Support\\Collection<int, float>|\\Illuminate\\Contracts\\Support\\Arrayable|array<int, float>  $vector
 * @return $this
 */',
        'startLine' => 2894,
        'endLine' => 2918,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'inRandomOrder' => 
      array (
        'name' => 'inRandomOrder',
        'parameters' => 
        array (
          'seed' => 
          array (
            'name' => 'seed',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 2926,
                'endLine' => 2926,
                'startTokenPos' => 12166,
                'startFilePos' => 90749,
                'endTokenPos' => 12166,
                'endFilePos' => 90750,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2926,
            'endLine' => 2926,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Put the query\'s results in random order.
 *
 * @param  string|int  $seed
 * @return $this
 */',
        'startLine' => 2926,
        'endLine' => 2929,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'orderByRaw' => 
      array (
        'name' => 'orderByRaw',
        'parameters' => 
        array (
          'sql' => 
          array (
            'name' => 'sql',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2938,
            'endLine' => 2938,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 2938,
                'endLine' => 2938,
                'startTokenPos' => 12205,
                'startFilePos' => 91040,
                'endTokenPos' => 12206,
                'endFilePos' => 91041,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2938,
            'endLine' => 2938,
            'startColumn' => 38,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a raw "order by" clause to the query.
 *
 * @param  string  $sql
 * @param  array  $bindings
 * @return $this
 */',
        'startLine' => 2938,
        'endLine' => 2947,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'skip' => 
      array (
        'name' => 'skip',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2955,
            'endLine' => 2955,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias to set the "offset" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 2955,
        'endLine' => 2958,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'offset' => 
      array (
        'name' => 'offset',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2966,
            'endLine' => 2966,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "offset" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 2966,
        'endLine' => 2973,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'take' => 
      array (
        'name' => 'take',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2981,
            'endLine' => 2981,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias to set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 2981,
        'endLine' => 2984,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'limit' => 
      array (
        'name' => 'limit',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2992,
            'endLine' => 2992,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the "limit" value of the query.
 *
 * @param  int  $value
 * @return $this
 */',
        'startLine' => 2992,
        'endLine' => 3001,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'groupLimit' => 
      array (
        'name' => 'groupLimit',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3010,
            'endLine' => 3010,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3010,
            'endLine' => 3010,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "group limit" clause to the query.
 *
 * @param  int  $value
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3010,
        'endLine' => 3017,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPage' => 
      array (
        'name' => 'forPage',
        'parameters' => 
        array (
          'page' => 
          array (
            'name' => 'page',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3026,
            'endLine' => 3026,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3026,
                'endLine' => 3026,
                'startTokenPos' => 12521,
                'startFilePos' => 92861,
                'endTokenPos' => 12521,
                'endFilePos' => 92862,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3026,
            'endLine' => 3026,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the limit and offset for a given page.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return $this
 */',
        'startLine' => 3026,
        'endLine' => 3029,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPageBeforeId' => 
      array (
        'name' => 'forPageBeforeId',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3039,
                'endLine' => 3039,
                'startTokenPos' => 12565,
                'startFilePos' => 93213,
                'endTokenPos' => 12565,
                'endFilePos' => 93214,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3039,
            'endLine' => 3039,
            'startColumn' => 37,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'lastId' => 
          array (
            'name' => 'lastId',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 3039,
                'endLine' => 3039,
                'startTokenPos' => 12572,
                'startFilePos' => 93227,
                'endTokenPos' => 12572,
                'endFilePos' => 93227,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3039,
            'endLine' => 3039,
            'startColumn' => 52,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 3039,
                'endLine' => 3039,
                'startTokenPos' => 12579,
                'startFilePos' => 93240,
                'endTokenPos' => 12579,
                'endFilePos' => 93243,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3039,
            'endLine' => 3039,
            'startColumn' => 65,
            'endColumn' => 78,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constrain the query to the previous "page" of results before a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3039,
        'endLine' => 3051,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forPageAfterId' => 
      array (
        'name' => 'forPageAfterId',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3061,
                'endLine' => 3061,
                'startTokenPos' => 12672,
                'startFilePos' => 93812,
                'endTokenPos' => 12672,
                'endFilePos' => 93813,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3061,
            'endLine' => 3061,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'lastId' => 
          array (
            'name' => 'lastId',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 3061,
                'endLine' => 3061,
                'startTokenPos' => 12679,
                'startFilePos' => 93826,
                'endTokenPos' => 12679,
                'endFilePos' => 93826,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3061,
            'endLine' => 3061,
            'startColumn' => 51,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => '\'id\'',
              'attributes' => 
              array (
                'startLine' => 3061,
                'endLine' => 3061,
                'startTokenPos' => 12686,
                'startFilePos' => 93839,
                'endTokenPos' => 12686,
                'endFilePos' => 93842,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3061,
            'endLine' => 3061,
            'startColumn' => 64,
            'endColumn' => 77,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Constrain the query to the next "page" of results after a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return $this
 */',
        'startLine' => 3061,
        'endLine' => 3073,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'reorder' => 
      array (
        'name' => 'reorder',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3082,
                'endLine' => 3082,
                'startTokenPos' => 12779,
                'startFilePos' => 94462,
                'endTokenPos' => 12779,
                'endFilePos' => 94465,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3082,
            'endLine' => 3082,
            'startColumn' => 29,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'direction' => 
          array (
            'name' => 'direction',
            'default' => 
            array (
              'code' => '\'asc\'',
              'attributes' => 
              array (
                'startLine' => 3082,
                'endLine' => 3082,
                'startTokenPos' => 12786,
                'startFilePos' => 94481,
                'endTokenPos' => 12786,
                'endFilePos' => 94485,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3082,
            'endLine' => 3082,
            'startColumn' => 45,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all existing orders and optionally add a new order.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $column
 * @param  string  $direction
 * @return $this
 */',
        'startLine' => 3082,
        'endLine' => 3094,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'reorderDesc' => 
      array (
        'name' => 'reorderDesc',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3102,
            'endLine' => 3102,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add descending "reorder" clause to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Contracts\\Database\\Query\\Expression|string|null  $column
 * @return $this
 */',
        'startLine' => 3102,
        'endLine' => 3105,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'removeExistingOrdersFor' => 
      array (
        'name' => 'removeExistingOrdersFor',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3113,
            'endLine' => 3113,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an array with all orders with a given column removed.
 *
 * @param  string  $column
 * @return array
 */',
        'startLine' => 3113,
        'endLine' => 3119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'union' => 
      array (
        'name' => 'union',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3128,
            'endLine' => 3128,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'all' => 
          array (
            'name' => 'all',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 3128,
                'endLine' => 3128,
                'startTokenPos' => 12978,
                'startFilePos' => 95746,
                'endTokenPos' => 12978,
                'endFilePos' => 95750,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3128,
            'endLine' => 3128,
            'startColumn' => 35,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "union" statement to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @param  bool  $all
 * @return $this
 */',
        'startLine' => 3128,
        'endLine' => 3139,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'unionAll' => 
      array (
        'name' => 'unionAll',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3147,
            'endLine' => 3147,
            'startColumn' => 30,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a "union all" statement to the query.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @return $this
 */',
        'startLine' => 3147,
        'endLine' => 3150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'lock' => 
      array (
        'name' => 'lock',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 3158,
                'endLine' => 3158,
                'startTokenPos' => 13090,
                'startFilePos' => 96451,
                'endTokenPos' => 13090,
                'endFilePos' => 96454,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3158,
            'endLine' => 3158,
            'startColumn' => 26,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lock the selected rows in the table.
 *
 * @param  string|bool  $value
 * @return $this
 */',
        'startLine' => 3158,
        'endLine' => 3167,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'lockForUpdate' => 
      array (
        'name' => 'lockForUpdate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Lock the selected rows in the table for updating.
 *
 * @return $this
 */',
        'startLine' => 3174,
        'endLine' => 3177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'sharedLock' => 
      array (
        'name' => 'sharedLock',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Share lock the selected rows in the table.
 *
 * @return $this
 */',
        'startLine' => 3184,
        'endLine' => 3187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'beforeQuery' => 
      array (
        'name' => 'beforeQuery',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3194,
            'endLine' => 3194,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a closure to be invoked before the query is executed.
 *
 * @return $this
 */',
        'startLine' => 3194,
        'endLine' => 3199,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'applyBeforeQueryCallbacks' => 
      array (
        'name' => 'applyBeforeQueryCallbacks',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invoke the "before query" modification callbacks.
 *
 * @return void
 */',
        'startLine' => 3206,
        'endLine' => 3213,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'afterQuery' => 
      array (
        'name' => 'afterQuery',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3220,
            'endLine' => 3220,
            'startColumn' => 32,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a closure to be invoked after the query is executed.
 *
 * @return $this
 */',
        'startLine' => 3220,
        'endLine' => 3225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'applyAfterQueryCallbacks' => 
      array (
        'name' => 'applyAfterQueryCallbacks',
        'parameters' => 
        array (
          'result' => 
          array (
            'name' => 'result',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3233,
            'endLine' => 3233,
            'startColumn' => 46,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Invoke the "after query" modification callbacks.
 *
 * @param  mixed  $result
 * @return mixed
 */',
        'startLine' => 3233,
        'endLine' => 3240,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'toSql' => 
      array (
        'name' => 'toSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the SQL representation of the query.
 *
 * @return string
 */',
        'startLine' => 3247,
        'endLine' => 3252,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'toRawSql' => 
      array (
        'name' => 'toRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw SQL representation of the query with embedded bindings.
 *
 * @return string
 */',
        'startLine' => 3259,
        'endLine' => 3264,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3273,
            'endLine' => 3273,
            'startColumn' => 26,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3273,
                'endLine' => 3273,
                'startTokenPos' => 13440,
                'startFilePos' => 99007,
                'endTokenPos' => 13442,
                'endFilePos' => 99011,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3273,
            'endLine' => 3273,
            'startColumn' => 31,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a query for a single record by ID.
 *
 * @param  int|string  $id
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return \\stdClass|null
 */',
        'startLine' => 3273,
        'endLine' => 3276,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'findOr' => 
      array (
        'name' => 'findOr',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3288,
            'endLine' => 3288,
            'startColumn' => 28,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3288,
                'endLine' => 3288,
                'startTokenPos' => 13485,
                'startFilePos' => 99528,
                'endTokenPos' => 13487,
                'endFilePos' => 99532,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3288,
            'endLine' => 3288,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3288,
                'endLine' => 3288,
                'startTokenPos' => 13497,
                'startFilePos' => 99556,
                'endTokenPos' => 13497,
                'endFilePos' => 99559,
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
                      'name' => 'Closure',
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
            'startLine' => 3288,
            'endLine' => 3288,
            'startColumn' => 51,
            'endColumn' => 75,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a query for a single record by ID or call a callback.
 *
 * @template TValue
 *
 * @param  mixed  $id
 * @param  (\\Closure(): TValue)|string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  (\\Closure(): TValue)|null  $callback
 * @return \\stdClass|TValue
 */',
        'startLine' => 3288,
        'endLine' => 3301,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'value' => 
      array (
        'name' => 'value',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3309,
            'endLine' => 3309,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single column\'s value from the first result of a query.
 *
 * @param  string  $column
 * @return mixed
 */',
        'startLine' => 3309,
        'endLine' => 3314,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'rawValue' => 
      array (
        'name' => 'rawValue',
        'parameters' => 
        array (
          'expression' => 
          array (
            'name' => 'expression',
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
            'startLine' => 3321,
            'endLine' => 3321,
            'startColumn' => 30,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'bindings' => 
          array (
            'name' => 'bindings',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 3321,
                'endLine' => 3321,
                'startTokenPos' => 13646,
                'startFilePos' => 100311,
                'endTokenPos' => 13647,
                'endFilePos' => 100312,
              ),
            ),
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
            'startLine' => 3321,
            'endLine' => 3321,
            'startColumn' => 50,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single expression value from the first result of a query.
 *
 * @return mixed
 */',
        'startLine' => 3321,
        'endLine' => 3326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'soleValue' => 
      array (
        'name' => 'soleValue',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3337,
            'endLine' => 3337,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a single column\'s value from the first result of a query if it\'s the sole matching record.
 *
 * @param  string  $column
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\RecordsNotFoundException
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
        'startLine' => 3337,
        'endLine' => 3342,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3350,
                'endLine' => 3350,
                'startTokenPos' => 13749,
                'startFilePos' => 101234,
                'endTokenPos' => 13751,
                'endFilePos' => 101238,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3350,
            'endLine' => 3350,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the query as a "select" statement.
 *
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return \\Illuminate\\Support\\Collection<int, \\stdClass>
 */',
        'startLine' => 3350,
        'endLine' => 3359,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'runSelect' => 
      array (
        'name' => 'runSelect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run the query as a "select" statement against the connection.
 *
 * @return array
 */',
        'startLine' => 3366,
        'endLine' => 3371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'withoutGroupLimitKeys' => 
      array (
        'name' => 'withoutGroupLimitKeys',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3379,
            'endLine' => 3379,
            'startColumn' => 46,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the group limit keys from the results in the collection.
 *
 * @param  \\Illuminate\\Support\\Collection  $items
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3379,
        'endLine' => 3397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'paginate' => 
      array (
        'name' => 'paginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3409,
                'endLine' => 3409,
                'startTokenPos' => 14047,
                'startFilePos' => 103134,
                'endTokenPos' => 14047,
                'endFilePos' => 103135,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3409,
            'endLine' => 3409,
            'startColumn' => 30,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3409,
                'endLine' => 3409,
                'startTokenPos' => 14054,
                'startFilePos' => 103149,
                'endTokenPos' => 14056,
                'endFilePos' => 103153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3409,
            'endLine' => 3409,
            'startColumn' => 45,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 3409,
                'endLine' => 3409,
                'startTokenPos' => 14063,
                'startFilePos' => 103168,
                'endTokenPos' => 14063,
                'endFilePos' => 103173,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3409,
            'endLine' => 3409,
            'startColumn' => 63,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3409,
                'endLine' => 3409,
                'startTokenPos' => 14070,
                'startFilePos' => 103184,
                'endTokenPos' => 14070,
                'endFilePos' => 103187,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3409,
            'endLine' => 3409,
            'startColumn' => 83,
            'endColumn' => 94,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'total' => 
          array (
            'name' => 'total',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3409,
                'endLine' => 3409,
                'startTokenPos' => 14077,
                'startFilePos' => 103199,
                'endTokenPos' => 14077,
                'endFilePos' => 103202,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3409,
            'endLine' => 3409,
            'startColumn' => 97,
            'endColumn' => 109,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int|\\Closure  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @param  \\Closure|int|null  $total
 * @return \\Illuminate\\Pagination\\LengthAwarePaginator
 */',
        'startLine' => 3409,
        'endLine' => 3423,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'simplePaginate' => 
      array (
        'name' => 'simplePaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3436,
                'endLine' => 3436,
                'startTokenPos' => 14216,
                'startFilePos' => 104161,
                'endTokenPos' => 14216,
                'endFilePos' => 104162,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3436,
            'endLine' => 3436,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3436,
                'endLine' => 3436,
                'startTokenPos' => 14223,
                'startFilePos' => 104176,
                'endTokenPos' => 14225,
                'endFilePos' => 104180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3436,
            'endLine' => 3436,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'pageName' => 
          array (
            'name' => 'pageName',
            'default' => 
            array (
              'code' => '\'page\'',
              'attributes' => 
              array (
                'startLine' => 3436,
                'endLine' => 3436,
                'startTokenPos' => 14232,
                'startFilePos' => 104195,
                'endTokenPos' => 14232,
                'endFilePos' => 104200,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3436,
            'endLine' => 3436,
            'startColumn' => 69,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'page' => 
          array (
            'name' => 'page',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3436,
                'endLine' => 3436,
                'startTokenPos' => 14239,
                'startFilePos' => 104211,
                'endTokenPos' => 14239,
                'endFilePos' => 104214,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3436,
            'endLine' => 3436,
            'startColumn' => 89,
            'endColumn' => 100,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a paginator only supporting simple next and previous links.
 *
 * This is more efficient on larger data-sets, etc.
 *
 * @param  int  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \\Illuminate\\Contracts\\Pagination\\Paginator
 */',
        'startLine' => 3436,
        'endLine' => 3446,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cursorPaginate' => 
      array (
        'name' => 'cursorPaginate',
        'parameters' => 
        array (
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => 
            array (
              'code' => '15',
              'attributes' => 
              array (
                'startLine' => 3459,
                'endLine' => 3459,
                'startTokenPos' => 14346,
                'startFilePos' => 105094,
                'endTokenPos' => 14346,
                'endFilePos' => 105095,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3459,
            'endLine' => 3459,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3459,
                'endLine' => 3459,
                'startTokenPos' => 14353,
                'startFilePos' => 105109,
                'endTokenPos' => 14355,
                'endFilePos' => 105113,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3459,
            'endLine' => 3459,
            'startColumn' => 51,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'cursorName' => 
          array (
            'name' => 'cursorName',
            'default' => 
            array (
              'code' => '\'cursor\'',
              'attributes' => 
              array (
                'startLine' => 3459,
                'endLine' => 3459,
                'startTokenPos' => 14362,
                'startFilePos' => 105130,
                'endTokenPos' => 14362,
                'endFilePos' => 105137,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3459,
            'endLine' => 3459,
            'startColumn' => 69,
            'endColumn' => 90,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cursor' => 
          array (
            'name' => 'cursor',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3459,
                'endLine' => 3459,
                'startTokenPos' => 14369,
                'startFilePos' => 105150,
                'endTokenPos' => 14369,
                'endFilePos' => 105153,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3459,
            'endLine' => 3459,
            'startColumn' => 93,
            'endColumn' => 106,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a paginator only supporting simple next and previous links.
 *
 * This is more efficient on larger data-sets, etc.
 *
 * @param  int|null  $perPage
 * @param  string|\\Illuminate\\Contracts\\Database\\Query\\Expression|array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  string  $cursorName
 * @param  \\Illuminate\\Pagination\\Cursor|string|null  $cursor
 * @return \\Illuminate\\Contracts\\Pagination\\CursorPaginator
 */',
        'startLine' => 3459,
        'endLine' => 3462,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ensureOrderForCursorPagination' => 
      array (
        'name' => 'ensureOrderForCursorPagination',
        'parameters' => 
        array (
          'shouldReverse' => 
          array (
            'name' => 'shouldReverse',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 3470,
                'endLine' => 3470,
                'startTokenPos' => 14407,
                'startFilePos' => 105496,
                'endTokenPos' => 14407,
                'endFilePos' => 105500,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3470,
            'endLine' => 3470,
            'startColumn' => 55,
            'endColumn' => 76,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the proper order by required for cursor pagination.
 *
 * @param  bool  $shouldReverse
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3470,
        'endLine' => 3496,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getCountForPagination' => 
      array (
        'name' => 'getCountForPagination',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3504,
                'endLine' => 3504,
                'startTokenPos' => 14654,
                'startFilePos' => 106604,
                'endTokenPos' => 14656,
                'endFilePos' => 106608,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3504,
            'endLine' => 3504,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the count of the total records for the paginator.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return int<0, max>
 */',
        'startLine' => 3504,
        'endLine' => 3518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'runPaginationCountQuery' => 
      array (
        'name' => 'runPaginationCountQuery',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3526,
                'endLine' => 3526,
                'startTokenPos' => 14762,
                'startFilePos' => 107427,
                'endTokenPos' => 14764,
                'endFilePos' => 107431,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3526,
            'endLine' => 3526,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run a pagination count query.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return array<mixed>
 */',
        'startLine' => 3526,
        'endLine' => 3548,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneForPaginationCount' => 
      array (
        'name' => 'cloneForPaginationCount',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the existing query instance for usage in a pagination subquery.
 *
 * @return self
 */',
        'startLine' => 3555,
        'endLine' => 3559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'withoutSelectAliases' => 
      array (
        'name' => 'withoutSelectAliases',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 3567,
            'endLine' => 3567,
            'startColumn' => 45,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove the column aliases since they will break count queries.
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @return array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>
 */',
        'startLine' => 3567,
        'endLine' => 3574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a lazy collection for the given query.
 *
 * @return \\Illuminate\\Support\\LazyCollection<int, \\stdClass>
 */',
        'startLine' => 3581,
        'endLine' => 3594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'enforceOrderBy' => 
      array (
        'name' => 'enforceOrderBy',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Throw an exception if the query doesn\'t have an orderBy clause.
 *
 * @return void
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 3603,
        'endLine' => 3608,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluck' => 
      array (
        'name' => 'pluck',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3617,
            'endLine' => 3617,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 3617,
                'endLine' => 3617,
                'startTokenPos' => 15321,
                'startFilePos' => 110550,
                'endTokenPos' => 15321,
                'endFilePos' => 110553,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3617,
            'endLine' => 3617,
            'startColumn' => 36,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a collection instance containing the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection<array-key, mixed>
 */',
        'startLine' => 3617,
        'endLine' => 3647,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'stripTableForPluck' => 
      array (
        'name' => 'stripTableForPluck',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3655,
            'endLine' => 3655,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Strip off the table name or alias from a column identifier.
 *
 * @param  string  $column
 * @return string|null
 */',
        'startLine' => 3655,
        'endLine' => 3668,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluckFromObjectColumn' => 
      array (
        'name' => 'pluckFromObjectColumn',
        'parameters' => 
        array (
          'queryResult' => 
          array (
            'name' => 'queryResult',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3678,
            'endLine' => 3678,
            'startColumn' => 46,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3678,
            'endLine' => 3678,
            'startColumn' => 60,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3678,
            'endLine' => 3678,
            'startColumn' => 69,
            'endColumn' => 72,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve column values from rows represented as objects.
 *
 * @param  array  $queryResult
 * @param  string  $column
 * @param  string  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3678,
        'endLine' => 3693,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'pluckFromArrayColumn' => 
      array (
        'name' => 'pluckFromArrayColumn',
        'parameters' => 
        array (
          'queryResult' => 
          array (
            'name' => 'queryResult',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3703,
            'endLine' => 3703,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3703,
            'endLine' => 3703,
            'startColumn' => 59,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3703,
            'endLine' => 3703,
            'startColumn' => 68,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve column values from rows represented as arrays.
 *
 * @param  array  $queryResult
 * @param  string  $column
 * @param  string  $key
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 3703,
        'endLine' => 3718,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'implode' => 
      array (
        'name' => 'implode',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3727,
            'endLine' => 3727,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'glue' => 
          array (
            'name' => 'glue',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 3727,
                'endLine' => 3727,
                'startTokenPos' => 15844,
                'startFilePos' => 113875,
                'endTokenPos' => 15844,
                'endFilePos' => 113876,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3727,
            'endLine' => 3727,
            'startColumn' => 38,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Concatenate values of a given column as a string.
 *
 * @param  string  $column
 * @param  string  $glue
 * @return string
 */',
        'startLine' => 3727,
        'endLine' => 3730,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'exists' => 
      array (
        'name' => 'exists',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if any rows exist for the current query.
 *
 * @return bool
 */',
        'startLine' => 3737,
        'endLine' => 3755,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'doesntExist' => 
      array (
        'name' => 'doesntExist',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if no rows exist for the current query.
 *
 * @return bool
 */',
        'startLine' => 3762,
        'endLine' => 3765,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'existsOr' => 
      array (
        'name' => 'existsOr',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3772,
            'endLine' => 3772,
            'startColumn' => 30,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback if no rows exist for the current query.
 *
 * @return mixed
 */',
        'startLine' => 3772,
        'endLine' => 3775,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'doesntExistOr' => 
      array (
        'name' => 'doesntExistOr',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3782,
            'endLine' => 3782,
            'startColumn' => 35,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback if rows exist for the current query.
 *
 * @return mixed
 */',
        'startLine' => 3782,
        'endLine' => 3785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '\'*\'',
              'attributes' => 
              array (
                'startLine' => 3793,
                'endLine' => 3793,
                'startTokenPos' => 16082,
                'startFilePos' => 115576,
                'endTokenPos' => 16082,
                'endFilePos' => 115578,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3793,
            'endLine' => 3793,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the "count" result of the query.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $columns
 * @return int<0, max>
 */',
        'startLine' => 3793,
        'endLine' => 3796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'min' => 
      array (
        'name' => 'min',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3804,
            'endLine' => 3804,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the minimum value of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 3804,
        'endLine' => 3807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'max' => 
      array (
        'name' => 'max',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3815,
            'endLine' => 3815,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the maximum value of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 3815,
        'endLine' => 3818,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'sum' => 
      array (
        'name' => 'sum',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3826,
            'endLine' => 3826,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the sum of the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 3826,
        'endLine' => 3831,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'avg' => 
      array (
        'name' => 'avg',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3839,
            'endLine' => 3839,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve the average of the values of a given column.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 3839,
        'endLine' => 3842,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'average' => 
      array (
        'name' => 'average',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3850,
            'endLine' => 3850,
            'startColumn' => 29,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for the "avg" method.
 *
 * @param  \\Illuminate\\Contracts\\Database\\Query\\Expression|string  $column
 * @return mixed
 */',
        'startLine' => 3850,
        'endLine' => 3853,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'aggregate' => 
      array (
        'name' => 'aggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3862,
            'endLine' => 3862,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3862,
                'endLine' => 3862,
                'startTokenPos' => 16281,
                'startFilePos' => 117291,
                'endTokenPos' => 16283,
                'endFilePos' => 117295,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3862,
            'endLine' => 3862,
            'startColumn' => 42,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute an aggregate function on the database.
 *
 * @param  string  $function
 * @param  array  $columns
 * @return mixed
 */',
        'startLine' => 3862,
        'endLine' => 3872,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'numericAggregate' => 
      array (
        'name' => 'numericAggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3881,
            'endLine' => 3881,
            'startColumn' => 38,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => 
            array (
              'code' => '[\'*\']',
              'attributes' => 
              array (
                'startLine' => 3881,
                'endLine' => 3881,
                'startTokenPos' => 16408,
                'startFilePos' => 117921,
                'endTokenPos' => 16410,
                'endFilePos' => 117925,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3881,
            'endLine' => 3881,
            'startColumn' => 49,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute a numeric aggregate function on the database.
 *
 * @param  string  $function
 * @param  array  $columns
 * @return float|int
 */',
        'startLine' => 3881,
        'endLine' => 3902,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'setAggregate' => 
      array (
        'name' => 'setAggregate',
        'parameters' => 
        array (
          'function' => 
          array (
            'name' => 'function',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3911,
            'endLine' => 3911,
            'startColumn' => 37,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3911,
            'endLine' => 3911,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the aggregate property without running the query.
 *
 * @param  string  $function
 * @param  array<\\Illuminate\\Contracts\\Database\\Query\\Expression|string>  $columns
 * @return $this
 */',
        'startLine' => 3911,
        'endLine' => 3922,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'onceWithColumns' => 
      array (
        'name' => 'onceWithColumns',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3935,
            'endLine' => 3935,
            'startColumn' => 40,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 3935,
            'endLine' => 3935,
            'startColumn' => 50,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the given callback while selecting the given columns.
 *
 * After running the callback, the columns are reset to the original value.
 *
 * @template TResult
 *
 * @param  array<string|\\Illuminate\\Contracts\\Database\\Query\\Expression>  $columns
 * @param  callable(): TResult  $callback
 * @return TResult
 */',
        'startLine' => 3935,
        'endLine' => 3948,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insert' => 
      array (
        'name' => 'insert',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 3955,
            'endLine' => 3955,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the database.
 *
 * @return bool
 */',
        'startLine' => 3955,
        'endLine' => 3988,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertOrIgnore' => 
      array (
        'name' => 'insertOrIgnore',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 3995,
            'endLine' => 3995,
            'startColumn' => 36,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the database while ignoring errors.
 *
 * @return int<0, max>
 */',
        'startLine' => 3995,
        'endLine' => 4017,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertGetId' => 
      array (
        'name' => 'insertGetId',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 4025,
            'endLine' => 4025,
            'startColumn' => 33,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'sequence' => 
          array (
            'name' => 'sequence',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4025,
                'endLine' => 4025,
                'startTokenPos' => 16993,
                'startFilePos' => 122303,
                'endTokenPos' => 16993,
                'endFilePos' => 122306,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4025,
            'endLine' => 4025,
            'startColumn' => 48,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert a new record and get the value of the primary key.
 *
 * @param  string|null  $sequence
 * @return int
 */',
        'startLine' => 4025,
        'endLine' => 4034,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertUsing' => 
      array (
        'name' => 'insertUsing',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 4042,
            'endLine' => 4042,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4042,
            'endLine' => 4042,
            'startColumn' => 49,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the table using a subquery.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return int
 */',
        'startLine' => 4042,
        'endLine' => 4052,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'insertOrIgnoreUsing' => 
      array (
        'name' => 'insertOrIgnoreUsing',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 4060,
            'endLine' => 4060,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4060,
            'endLine' => 4060,
            'startColumn' => 57,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records into the table using a subquery while ignoring errors.
 *
 * @param  \\Closure|\\Illuminate\\Database\\Query\\Builder|\\Illuminate\\Database\\Eloquent\\Builder<*>|string  $query
 * @return int
 */',
        'startLine' => 4060,
        'endLine' => 4070,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'update' => 
      array (
        'name' => 'update',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 4077,
            'endLine' => 4077,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update records in the database.
 *
 * @return int<0, max>
 */',
        'startLine' => 4077,
        'endLine' => 4100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'updateFrom' => 
      array (
        'name' => 'updateFrom',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 4107,
            'endLine' => 4107,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Update records in a PostgreSQL database using the update from syntax.
 *
 * @return int
 */',
        'startLine' => 4107,
        'endLine' => 4120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'updateOrInsert' => 
      array (
        'name' => 'updateOrInsert',
        'parameters' => 
        array (
          'attributes' => 
          array (
            'name' => 'attributes',
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
            'startLine' => 4127,
            'endLine' => 4127,
            'startColumn' => 36,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4127,
                'endLine' => 4127,
                'startTokenPos' => 17617,
                'startFilePos' => 125661,
                'endTokenPos' => 17618,
                'endFilePos' => 125662,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
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
            'startLine' => 4127,
            'endLine' => 4127,
            'startColumn' => 55,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert or update a record matching the attributes, and fill it with values.
 *
 * @return bool
 */',
        'startLine' => 4127,
        'endLine' => 4144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'upsert' => 
      array (
        'name' => 'upsert',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
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
            'startLine' => 4151,
            'endLine' => 4151,
            'startColumn' => 28,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'uniqueBy' => 
          array (
            'name' => 'uniqueBy',
            'default' => NULL,
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
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
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
            'startLine' => 4151,
            'endLine' => 4151,
            'startColumn' => 43,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'update' => 
          array (
            'name' => 'update',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4151,
                'endLine' => 4151,
                'startTokenPos' => 17755,
                'startFilePos' => 126234,
                'endTokenPos' => 17755,
                'endFilePos' => 126237,
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
                      'name' => 'array',
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
            'startLine' => 4151,
            'endLine' => 4151,
            'startColumn' => 67,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Insert new records or update the existing ones.
 *
 * @return int
 */',
        'startLine' => 4151,
        'endLine' => 4186,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'increment' => 
      array (
        'name' => 'increment',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4197,
            'endLine' => 4197,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 4197,
                'endLine' => 4197,
                'startTokenPos' => 18017,
                'startFilePos' => 127456,
                'endTokenPos' => 18017,
                'endFilePos' => 127456,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4197,
            'endLine' => 4197,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4197,
                'endLine' => 4197,
                'startTokenPos' => 18026,
                'startFilePos' => 127474,
                'endTokenPos' => 18027,
                'endFilePos' => 127475,
              ),
            ),
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
            'startLine' => 4197,
            'endLine' => 4197,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Increment a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4197,
        'endLine' => 4204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'incrementEach' => 
      array (
        'name' => 'incrementEach',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 4215,
            'endLine' => 4215,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4215,
                'endLine' => 4215,
                'startTokenPos' => 18097,
                'startFilePos' => 128040,
                'endTokenPos' => 18098,
                'endFilePos' => 128041,
              ),
            ),
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
            'startLine' => 4215,
            'endLine' => 4215,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Increment the given column\'s values by the given amounts.
 *
 * @param  array<string, float|int|numeric-string>  $columns
 * @param  array<string, mixed>  $extra
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4215,
        'endLine' => 4228,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'decrement' => 
      array (
        'name' => 'decrement',
        'parameters' => 
        array (
          'column' => 
          array (
            'name' => 'column',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4239,
            'endLine' => 4239,
            'startColumn' => 31,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'amount' => 
          array (
            'name' => 'amount',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 4239,
                'endLine' => 4239,
                'startTokenPos' => 18236,
                'startFilePos' => 128868,
                'endTokenPos' => 18236,
                'endFilePos' => 128868,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4239,
            'endLine' => 4239,
            'startColumn' => 40,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4239,
                'endLine' => 4239,
                'startTokenPos' => 18245,
                'startFilePos' => 128886,
                'endTokenPos' => 18246,
                'endFilePos' => 128887,
              ),
            ),
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
            'startLine' => 4239,
            'endLine' => 4239,
            'startColumn' => 53,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Decrement a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4239,
        'endLine' => 4246,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'decrementEach' => 
      array (
        'name' => 'decrementEach',
        'parameters' => 
        array (
          'columns' => 
          array (
            'name' => 'columns',
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
            'startLine' => 4257,
            'endLine' => 4257,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'extra' => 
          array (
            'name' => 'extra',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 4257,
                'endLine' => 4257,
                'startTokenPos' => 18316,
                'startFilePos' => 129452,
                'endTokenPos' => 18317,
                'endFilePos' => 129453,
              ),
            ),
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
            'startLine' => 4257,
            'endLine' => 4257,
            'startColumn' => 51,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Decrement the given column\'s values by the given amounts.
 *
 * @param  array<string, float|int|numeric-string>  $columns
 * @param  array<string, mixed>  $extra
 * @return int<0, max>
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4257,
        'endLine' => 4270,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'delete' => 
      array (
        'name' => 'delete',
        'parameters' => 
        array (
          'id' => 
          array (
            'name' => 'id',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 4278,
                'endLine' => 4278,
                'startTokenPos' => 18452,
                'startFilePos' => 130157,
                'endTokenPos' => 18452,
                'endFilePos' => 130160,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4278,
            'endLine' => 4278,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Delete records from the database.
 *
 * @param  mixed  $id
 * @return int
 */',
        'startLine' => 4278,
        'endLine' => 4294,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'truncate' => 
      array (
        'name' => 'truncate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run a "truncate" statement on the table.
 *
 * @return void
 */',
        'startLine' => 4301,
        'endLine' => 4308,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'newQuery' => 
      array (
        'name' => 'newQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a new instance of the query builder.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 4315,
        'endLine' => 4318,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'forSubQuery' => 
      array (
        'name' => 'forSubQuery',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new query instance for a sub-query.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
        'startLine' => 4325,
        'endLine' => 4328,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getColumns' => 
      array (
        'name' => 'getColumns',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the query builder\'s columns in a text-only array with all expressions evaluated.
 *
 * @return list<string>
 */',
        'startLine' => 4335,
        'endLine' => 4340,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'raw' => 
      array (
        'name' => 'raw',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4348,
            'endLine' => 4348,
            'startColumn' => 25,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a raw database expression.
 *
 * @param  mixed  $value
 * @return \\Illuminate\\Contracts\\Database\\Query\\Expression
 */',
        'startLine' => 4348,
        'endLine' => 4351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getUnionBuilders' => 
      array (
        'name' => 'getUnionBuilders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query builder instances that are used in the union of the query.
 *
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 4358,
        'endLine' => 4363,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getLimit' => 
      array (
        'name' => 'getLimit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "limit" value for the query or null if it\'s not set.
 *
 * @return mixed
 */',
        'startLine' => 4370,
        'endLine' => 4375,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getOffset' => 
      array (
        'name' => 'getOffset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "offset" value for the query or null if it\'s not set.
 *
 * @return mixed
 */',
        'startLine' => 4382,
        'endLine' => 4387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getBindings' => 
      array (
        'name' => 'getBindings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current query value bindings in a flattened array.
 *
 * @return list<mixed>
 */',
        'startLine' => 4394,
        'endLine' => 4397,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getRawBindings' => 
      array (
        'name' => 'getRawBindings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the raw array of bindings.
 *
 * @return array{
 *      select: list<mixed>,
 *      from: list<mixed>,
 *      join: list<mixed>,
 *      where: list<mixed>,
 *      groupBy: list<mixed>,
 *      having: list<mixed>,
 *      order: list<mixed>,
 *      union: list<mixed>,
 *      unionOrder: list<mixed>,
 * }
 */',
        'startLine' => 4414,
        'endLine' => 4417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'setBindings' => 
      array (
        'name' => 'setBindings',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 4428,
            'endLine' => 4428,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 4428,
                'endLine' => 4428,
                'startTokenPos' => 18970,
                'startFilePos' => 134068,
                'endTokenPos' => 18970,
                'endFilePos' => 134074,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4428,
            'endLine' => 4428,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the bindings on the query builder.
 *
 * @param  list<mixed>  $bindings
 * @param  "select"|"from"|"join"|"where"|"groupBy"|"having"|"order"|"union"|"unionOrder"  $type
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4428,
        'endLine' => 4437,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'addBinding' => 
      array (
        'name' => 'addBinding',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4448,
            'endLine' => 4448,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => '\'where\'',
              'attributes' => 
              array (
                'startLine' => 4448,
                'endLine' => 4448,
                'startTokenPos' => 19045,
                'startFilePos' => 134612,
                'endTokenPos' => 19045,
                'endFilePos' => 134618,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4448,
            'endLine' => 4448,
            'startColumn' => 40,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a binding to the query.
 *
 * @param  mixed  $value
 * @param  "select"|"from"|"join"|"where"|"groupBy"|"having"|"order"|"union"|"unionOrder"  $type
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 4448,
        'endLine' => 4464,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'castBinding' => 
      array (
        'name' => 'castBinding',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4472,
            'endLine' => 4472,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cast the given binding value.
 *
 * @param  mixed  $value
 * @return mixed
 */',
        'startLine' => 4472,
        'endLine' => 4479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'mergeBindings' => 
      array (
        'name' => 'mergeBindings',
        'parameters' => 
        array (
          'query' => 
          array (
            'name' => 'query',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'self',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4487,
            'endLine' => 4487,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Merge an array of bindings into our bindings.
 *
 * @param  self  $query
 * @return $this
 */',
        'startLine' => 4487,
        'endLine' => 4492,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cleanBindings' => 
      array (
        'name' => 'cleanBindings',
        'parameters' => 
        array (
          'bindings' => 
          array (
            'name' => 'bindings',
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
            'startLine' => 4500,
            'endLine' => 4500,
            'startColumn' => 35,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all of the expressions from a list of bindings.
 *
 * @param  array<mixed>  $bindings
 * @return list<mixed>
 */',
        'startLine' => 4500,
        'endLine' => 4509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'flattenValue' => 
      array (
        'name' => 'flattenValue',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4517,
            'endLine' => 4517,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a scalar type value from an unknown type of input.
 *
 * @param  mixed  $value
 * @return mixed
 */',
        'startLine' => 4517,
        'endLine' => 4520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'defaultKeyName' => 
      array (
        'name' => 'defaultKeyName',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the default key name of the table.
 *
 * @return string
 */',
        'startLine' => 4527,
        'endLine' => 4530,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getConnection' => 
      array (
        'name' => 'getConnection',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database connection instance.
 *
 * @return \\Illuminate\\Database\\ConnectionInterface
 */',
        'startLine' => 4537,
        'endLine' => 4540,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ensureConnectionSupportsVectors' => 
      array (
        'name' => 'ensureConnectionSupportsVectors',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensure the database connection supports vector queries.
 *
 * @return void
 */',
        'startLine' => 4547,
        'endLine' => 4552,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getProcessor' => 
      array (
        'name' => 'getProcessor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the database query processor instance.
 *
 * @return \\Illuminate\\Database\\Query\\Processors\\Processor
 */',
        'startLine' => 4559,
        'endLine' => 4562,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'getGrammar' => 
      array (
        'name' => 'getGrammar',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the query grammar instance.
 *
 * @return \\Illuminate\\Database\\Query\\Grammars\\Grammar
 */',
        'startLine' => 4569,
        'endLine' => 4572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'useWritePdo' => 
      array (
        'name' => 'useWritePdo',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Use the "write" PDO connection when executing the query.
 *
 * @return $this
 */',
        'startLine' => 4579,
        'endLine' => 4584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'isQueryable' => 
      array (
        'name' => 'isQueryable',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4592,
            'endLine' => 4592,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the value is a query builder instance or a Closure.
 *
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 4592,
        'endLine' => 4598,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'clone' => 
      array (
        'name' => 'clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query.
 *
 * @return static
 */',
        'startLine' => 4605,
        'endLine' => 4608,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneWithout' => 
      array (
        'name' => 'cloneWithout',
        'parameters' => 
        array (
          'properties' => 
          array (
            'name' => 'properties',
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
            'startLine' => 4615,
            'endLine' => 4615,
            'startColumn' => 34,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query without the given properties.
 *
 * @return static
 */',
        'startLine' => 4615,
        'endLine' => 4622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'cloneWithoutBindings' => 
      array (
        'name' => 'cloneWithoutBindings',
        'parameters' => 
        array (
          'except' => 
          array (
            'name' => 'except',
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
            'startLine' => 4629,
            'endLine' => 4629,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clone the query without the given bindings.
 *
 * @return static
 */',
        'startLine' => 4629,
        'endLine' => 4636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4644,
            'endLine' => 4644,
            'startColumn' => 26,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the current SQL and bindings.
 *
 * @param  mixed  ...$args
 * @return $this
 */',
        'startLine' => 4644,
        'endLine' => 4653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dumpRawSql' => 
      array (
        'name' => 'dumpRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the raw current SQL with embedded bindings.
 *
 * @return $this
 */',
        'startLine' => 4660,
        'endLine' => 4665,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Die and dump the current SQL and bindings.
 *
 * @return never
 */',
        'startLine' => 4672,
        'endLine' => 4675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      'ddRawSql' => 
      array (
        'name' => 'ddRawSql',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Die and dump the current SQL with embedded bindings.
 *
 * @return never
 */',
        'startLine' => 4682,
        'endLine' => 4685,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4696,
            'endLine' => 4696,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 4696,
            'endLine' => 4696,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle dynamic method calls into the method.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
        'startLine' => 4696,
        'endLine' => 4707,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Database\\Query',
        'declaringClassName' => 'Illuminate\\Database\\Query\\Builder',
        'implementingClassName' => 'Illuminate\\Database\\Query\\Builder',
        'currentClassName' => 'Illuminate\\Database\\Query\\Builder',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
        'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\buildswheredateclauses::__call',
          ),
        ),
        'Illuminate\\Database\\Concerns\\BuildsQueries' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\buildsqueries::__call',
          ),
        ),
        'Illuminate\\Database\\Concerns\\ExplainsQueries' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\database\\concerns\\explainsqueries::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\ForwardsCalls' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\forwardscalls::__call',
          ),
        ),
        'Illuminate\\Support\\Traits\\Macroable' => 
        array (
          0 => 
          array (
            'alias' => 'macroCall',
            'method' => '__call',
            'hash' => 'illuminate\\support\\traits\\macroable::__call',
          ),
        ),
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
        'illuminate\\database\\concerns\\buildswheredateclauses::__call' => 'Illuminate\\Database\\Concerns\\BuildsWhereDateClauses::__call',
        'illuminate\\database\\concerns\\buildsqueries::__call' => 'Illuminate\\Database\\Concerns\\BuildsQueries::__call',
        'illuminate\\database\\concerns\\explainsqueries::__call' => 'Illuminate\\Database\\Concerns\\ExplainsQueries::__call',
        'illuminate\\support\\traits\\forwardscalls::__call' => 'Illuminate\\Support\\Traits\\ForwardsCalls::__call',
        'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
      ),
    ),
  ),
));