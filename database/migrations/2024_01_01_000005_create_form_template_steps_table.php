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
        Schema::create(config('form-flow.tables.form_template_steps', 'form_template_steps'), function (Blueprint $table): void {
            if (config('form-flow.database.native_uuids', false)) {
                $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            } else {
                $table->uuid('id')->primary();
            }

            $table->uuid('form_template_id');
            $table->uuid('flow_slot_id');
            $table->string('key');
            $table->string('name');
            $table->unsignedInteger('position_in_slot')->default(0);
            $table->string('visibility_mode')->default('always');
            $table->json('visibility_conditions')->nullable();
            $table->json('fields');
            $table->json('validation_rules')->nullable();
            $table->json('validation_schema')->nullable();
            $table->json('ui_schema')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('form_template_id')
                ->references('id')
                ->on(config('form-flow.tables.form_templates', 'form_templates'))
                ->cascadeOnDelete();

            $table->foreign('flow_slot_id')
                ->references('id')
                ->on(config('form-flow.tables.flow_slots', 'flow_slots'))
                ->cascadeOnDelete();

            $table->unique(['form_template_id', 'key']);
            $table->index(['form_template_id', 'flow_slot_id', 'position_in_slot'], 'template_step_position_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.form_template_steps', 'form_template_steps'));
    }
};
