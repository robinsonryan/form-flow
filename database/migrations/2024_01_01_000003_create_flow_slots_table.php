<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(config('form-flow.tables.flow_slots', 'flow_slots'), function (Blueprint $table): void {
            if (config('form-flow.database.native_uuids', false)) {
                $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            } else {
                $table->uuid('id')->primary();
            }

            $table->uuid('flow_id');
            $table->string('key');
            $table->string('name');
            $table->unsignedInteger('position')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('flow_id')
                ->references('id')
                ->on(config('form-flow.tables.flows', 'flows'))
                ->cascadeOnDelete();

            $table->unique(['flow_id', 'key']);
            $table->index(['flow_id', 'position']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.flow_slots', 'flow_slots'));
    }
};
