<?php declare(strict_types = 1);

// osfsl-/var/www/html/vendor/composer/../opis/json-schema/src/Helper.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Opis\JsonSchema\Helper
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0b2134f1967b77beeeaa24b2ab6ecb62f989adfc6a7f5ead60463f090e1405c5-8.3.27-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Opis\\JsonSchema\\Helper',
        'filename' => '/var/www/html/vendor/composer/../opis/json-schema/src/Helper.php',
      ),
    ),
    'namespace' => 'Opis\\JsonSchema',
    'name' => 'Opis\\JsonSchema\\Helper',
    'shortName' => 'Helper',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 392,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'JSON_TYPES' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'JSON_TYPES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'string\', \'number\', \'boolean\', \'null\', \'object\', \'array\']',
          'attributes' => 
          array (
            'startLine' => 23,
            'endLine' => 23,
            'startTokenPos' => 26,
            'startFilePos' => 865,
            'endTokenPos' => 43,
            'endFilePos' => 922,
          ),
        ),
        'docComment' => '/** @var string[] */',
        'attributes' => 
        array (
        ),
        'startLine' => 23,
        'endLine' => 23,
        'startColumn' => 5,
        'endColumn' => 89,
      ),
      'JSON_SUBTYPES' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'JSON_SUBTYPES',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'integer\' => \'number\']',
          'attributes' => 
          array (
            'startLine' => 26,
            'endLine' => 26,
            'startTokenPos' => 56,
            'startFilePos' => 984,
            'endTokenPos' => 62,
            'endFilePos' => 1006,
          ),
        ),
        'docComment' => '/** @var string[] */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 57,
      ),
      'PHP_TYPE_MAP' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'PHP_TYPE_MAP',
        'modifiers' => 2,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'NULL\' => \'null\', \'integer\' => \'integer\', \'double\' => \'number\', \'boolean\' => \'boolean\', \'array\' => \'array\', \'object\' => \'object\', \'string\' => \'string\']',
          'attributes' => 
          array (
            'startLine' => 29,
            'endLine' => 37,
            'startTokenPos' => 75,
            'startFilePos' => 1070,
            'endTokenPos' => 126,
            'endFilePos' => 1284,
          ),
        ),
        'docComment' => '/** @var string[] */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'hasBCMath' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'hasBCMath',
        'modifiers' => 20,
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
                  'name' => 'bool',
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
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 242,
            'endLine' => 242,
            'startTokenPos' => 1281,
            'startFilePos' => 6191,
            'endTokenPos' => 1281,
            'endFilePos' => 6194,
          ),
        ),
        'docComment' => '/**
 * @var bool|null True if bcmath extension is available
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 242,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'useBCMath' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'useBCMath',
        'modifiers' => 17,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 247,
            'endLine' => 247,
            'startTokenPos' => 1296,
            'startFilePos' => 6286,
            'endTokenPos' => 1296,
            'endFilePos' => 6289,
          ),
        ),
        'docComment' => '/**
 * @var bool True to use bcmath
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 247,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'numberScale' => 
      array (
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'name' => 'numberScale',
        'modifiers' => 17,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '14',
          'attributes' => 
          array (
            'startLine' => 252,
            'endLine' => 252,
            'startTokenPos' => 1311,
            'startFilePos' => 6406,
            'endTokenPos' => 1311,
            'endFilePos' => 6407,
          ),
        ),
        'docComment' => '/**
 * @var int Number scale to used when using comparisons
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 252,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 40,
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
      'isValidJsonType' => 
      array (
        'name' => 'isValidJsonType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 43,
            'endLine' => 43,
            'startColumn' => 44,
            'endColumn' => 55,
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
        'docComment' => '/**
 * @param string $type
 * @return bool
 */',
        'startLine' => 43,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'getJsonSuperType' => 
      array (
        'name' => 'getJsonSuperType',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 56,
            'endLine' => 56,
            'startColumn' => 45,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $type
 * @return null|string
 */',
        'startLine' => 56,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'getJsonType' => 
      array (
        'name' => 'getJsonType',
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
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'use_subtypes' => 
          array (
            'name' => 'use_subtypes',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 66,
                'endLine' => 66,
                'startTokenPos' => 246,
                'startFilePos' => 1940,
                'endTokenPos' => 246,
                'endFilePos' => 1943,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 66,
            'endLine' => 66,
            'startColumn' => 48,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $value
 * @param bool $use_subtypes
 * @return null|string
 */',
        'startLine' => 66,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'jsonTypeMatches' => 
      array (
        'name' => 'jsonTypeMatches',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
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
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'allowed' => 
          array (
            'name' => 'allowed',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 91,
            'endLine' => 91,
            'startColumn' => 58,
            'endColumn' => 65,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $type
 * @param string|string[] $allowed
 * @return bool
 */',
        'startLine' => 91,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'valueIsOfJsonType' => 
      array (
        'name' => 'valueIsOfJsonType',
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 46,
            'endColumn' => 51,
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
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 54,
            'endColumn' => 58,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $value
 * @param string|string[] $type
 * @return bool
 */',
        'startLine' => 123,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'isIndexedArray' => 
      array (
        'name' => 'isIndexedArray',
        'parameters' => 
        array (
          'array' => 
          array (
            'name' => 'array',
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
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 43,
            'endColumn' => 54,
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
        'docComment' => '/**
 * @param array $array
 * @return bool
 */',
        'startLine' => 137,
        'endLine' => 146,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'convertAssocArrayToObject' => 
      array (
        'name' => 'convertAssocArrayToObject',
        'parameters' => 
        array (
          'schema' => 
          array (
            'name' => 'schema',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 54,
            'endColumn' => 60,
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
 * Converts assoc-arrays to objects (recursive)
 * @param scalar|object|array|null $schema
 * @return scalar|object|array|null
 */',
        'startLine' => 153,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'equals' => 
      array (
        'name' => 'equals',
        'parameters' => 
        array (
          'a' => 
          array (
            'name' => 'a',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 35,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'b' => 
          array (
            'name' => 'b',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 39,
            'endColumn' => 40,
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
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param mixed $a
 * @param mixed $b
 * @return bool
 */',
        'startLine' => 175,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'isMultipleOf' => 
      array (
        'name' => 'isMultipleOf',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'divisor' => 
          array (
            'name' => 'divisor',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'scale' => 
          array (
            'name' => 'scale',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 260,
                'endLine' => 260,
                'startTokenPos' => 1337,
                'startFilePos' => 6595,
                'endTokenPos' => 1337,
                'endFilePos' => 6598,
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
                      'name' => 'int',
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
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 60,
            'endColumn' => 77,
            'parameterIndex' => 2,
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
        'docComment' => '/**
 * @param $number
 * @param $divisor
 * @param int|null $scale
 * @return bool
 */',
        'startLine' => 260,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'cloneValue' => 
      array (
        'name' => 'cloneValue',
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
            'startLine' => 319,
            'endLine' => 319,
            'startColumn' => 39,
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
 * @param $value
 * @return mixed
 */',
        'startLine' => 319,
        'endLine' => 334,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'isValidPattern' => 
      array (
        'name' => 'isValidPattern',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
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
            'startLine' => 340,
            'endLine' => 340,
            'startColumn' => 43,
            'endColumn' => 57,
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
        'docComment' => '/**
 * @param string $pattern
 * @return bool
 */',
        'startLine' => 340,
        'endLine' => 347,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'patternToRegex' => 
      array (
        'name' => 'patternToRegex',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
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
            'startLine' => 353,
            'endLine' => 353,
            'startColumn' => 43,
            'endColumn' => 57,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param string $pattern
 * @return string
 */',
        'startLine' => 353,
        'endLine' => 356,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
        'aliasName' => NULL,
      ),
      'toJSON' => 
      array (
        'name' => 'toJSON',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 362,
            'endLine' => 362,
            'startColumn' => 35,
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
 * @param mixed $data
 * @return mixed
 */',
        'startLine' => 362,
        'endLine' => 391,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Opis\\JsonSchema',
        'declaringClassName' => 'Opis\\JsonSchema\\Helper',
        'implementingClassName' => 'Opis\\JsonSchema\\Helper',
        'currentClassName' => 'Opis\\JsonSchema\\Helper',
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