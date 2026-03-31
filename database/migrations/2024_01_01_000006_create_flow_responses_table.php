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
        Schema::create(config('form-flow.tables.flow_responses', 'flow_responses'), function (Blueprint $table): void {
            if (config('form-flow.database.native_uuids', false)) {
                $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            } else {
                $table->uuid('id')->primary();
            }

            $table->uuid('account_id')->index();
            $table->uuid('flow_id');
            $table->uuid('form_template_id')->nullable();
            $table->nullableUuidMorphs('subject');
            $table->uuid('initiated_by')->nullable();
            $table->string('initiated_by_type')->nullable();
            $table->uuid('completed_by')->nullable();
            $table->string('completed_by_type')->nullable();
            $table->json('responses')->nullable();
            $table->json('step_progress')->nullable();
            $table->string('status')->default('in_progress');
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('flow_id')
                ->references('id')
                ->on(config('form-flow.tables.flows', 'flows'))
                ->cascadeOnDelete();

            $table->foreign('form_template_id')
                ->references('id')
                ->on(config('form-flow.tables.form_templates', 'form_templates'))
                ->nullOnDelete();

            $table->index(['account_id', 'status']);
            $table->index(['flow_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.flow_responses', 'flow_responses'));
    }
};
