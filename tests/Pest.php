<?php

declare(strict_types=1);

use Illuminate\Support\Str;
use RobinsonRyan\FormFlow\Tests\TestCase;

uses(TestCase::class)->in('Feature', 'Unit');

/**
 * A UUID7 standing in for an identifier the host application would supply —
 * account ids, actor ids and subject ids.
 *
 * These are real `uuid` columns, so a readable placeholder like 'account-123'
 * is rejected outright by PostgreSQL. Generating one here keeps fixtures honest
 * about the shape of the values a consumer will actually pass in.
 */
function fixtureUuid(): string
{
    return Str::uuid7()->toString();
}
