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
        Schema::create(config('form-flow.tables.flow_steps', 'flow_steps'), function (Blueprint $table): void {
            $table->uuid('id')->primary()->default(DB::raw('uuidv7()'));

            $table->uuid('flow_id');
            $table->string('key');
            $table->string('name');
            $table->unsignedInteger('position')->default(0);
            $table->string('visibility_mode')->default('always');
            $table->json('visibility_conditions')->nullable();
            $table->json('fields');
            $table->json('validation_rules')->nullable();
            $table->json('validation_schema')->nullable();
            $table->json('ui_schema')->nullable();
            $table->timestampsTz();
            $table->softDeletesTz();

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
        Schema::dropIfExists(config('form-flow.tables.flow_steps', 'flow_steps'));
    }
};
