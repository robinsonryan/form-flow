<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use RobinsonRyan\FormFlow\Enums\FlowStatus;
use RobinsonRyan\FormFlow\Enums\OwnerScope;
use RobinsonRyan\FormFlow\Models\Flow;
use RobinsonRyan\FormFlow\Models\FlowSlot;
use RobinsonRyan\FormFlow\Models\FlowStep;

uses(RefreshDatabase::class);

describe('Flow Model', function (): void {
    it('lets the database assign a uuid7 primary key', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'description' => 'A test flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Draft,
        ]);

        // PostgreSQL's uuidv7() column default generates the key during INSERT
        // and the `returning "id"` clause hands it back to the model. The
        // version nibble (7) and variant nibble (8-b) prove it is a UUID7 and
        // not the UUID4 that Laravel used to generate in PHP.
        expect($flow->id)->toBeString()
            ->and($flow->id)->toHaveLength(36)
            ->and($flow->id)->toMatch('/^[0-9a-f]{8}-[0-9a-f]{4}-7[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/');
    });

    it('casts owner_scope to enum', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'draft',
        ]);

        expect($flow->owner_scope)->toBeInstanceOf(OwnerScope::class)
            ->and($flow->owner_scope)->toBe(OwnerScope::Global);
    });

    it('casts status to enum', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'active',
        ]);

        expect($flow->status)->toBeInstanceOf(FlowStatus::class)
            ->and($flow->status)->toBe(FlowStatus::Active);
    });

    it('has many steps relationship', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'draft',
        ]);

        $step = FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'step-1',
            'name' => 'Step 1',
            'position' => 0,
            'fields' => [],
        ]);

        expect($flow->steps)->toHaveCount(1)
            ->and($flow->steps->first()->id)->toBe($step->id);
    });

    it('has many slots relationship', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'draft',
        ]);

        $slot = FlowSlot::create([
            'flow_id' => $flow->id,
            'key' => 'after-personal-info',
            'name' => 'After Personal Info',
            'position' => 1,
        ]);

        expect($flow->slots)->toHaveCount(1)
            ->and($flow->slots->first()->id)->toBe($slot->id);
    });

    it('determines if flow is global', function (): void {
        $globalFlow = Flow::create([
            'key' => 'global-flow',
            'name' => 'Global Flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Draft,
        ]);

        $tenantFlow = Flow::create([
            'key' => 'tenant-flow',
            'name' => 'Tenant Flow',
            'owner_scope' => OwnerScope::Tenant,
            'account_id' => fixtureUuid(),
            'status' => FlowStatus::Draft,
        ]);

        expect($globalFlow->isGlobal())->toBeTrue()
            ->and($globalFlow->isTenant())->toBeFalse()
            ->and($tenantFlow->isGlobal())->toBeFalse()
            ->and($tenantFlow->isTenant())->toBeTrue();
    });

    it('determines if flow is active', function (): void {
        $activeFlow = Flow::create([
            'key' => 'active-flow',
            'name' => 'Active Flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Active,
        ]);

        $draftFlow = Flow::create([
            'key' => 'draft-flow',
            'name' => 'Draft Flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Draft,
        ]);

        expect($activeFlow->isActive())->toBeTrue()
            ->and($activeFlow->isDraft())->toBeFalse()
            ->and($draftFlow->isActive())->toBeFalse()
            ->and($draftFlow->isDraft())->toBeTrue();
    });

    it('can activate a flow', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Draft,
        ]);

        expect($flow->isDraft())->toBeTrue();

        $flow->activate();

        expect($flow->isActive())->toBeTrue();
    });

    it('can archive a flow', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => OwnerScope::Global,
            'status' => FlowStatus::Active,
        ]);

        $flow->archive();

        expect($flow->status)->toBe(FlowStatus::Archived);
    });

    it('orders steps by position', function (): void {
        $flow = Flow::create([
            'key' => 'test-flow',
            'name' => 'Test Flow',
            'owner_scope' => 'global',
            'status' => 'draft',
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'step-3',
            'name' => 'Step 3',
            'position' => 2,
            'fields' => [],
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'step-1',
            'name' => 'Step 1',
            'position' => 0,
            'fields' => [],
        ]);

        FlowStep::create([
            'flow_id' => $flow->id,
            'key' => 'step-2',
            'name' => 'Step 2',
            'position' => 1,
            'fields' => [],
        ]);

        $flow->refresh();

        expect($flow->steps)->toHaveCount(3)
            ->and($flow->steps[0]->key)->toBe('step-1')
            ->and($flow->steps[1]->key)->toBe('step-2')
            ->and($flow->steps[2]->key)->toBe('step-3');
    });
});
