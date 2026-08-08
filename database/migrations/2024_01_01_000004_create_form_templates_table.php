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
        Schema::create(config('form-flow.tables.form_templates', 'form_templates'), function (Blueprint $table): void {
            $table->uuid('id')->primary()->default(DB::raw('uuidv7()'));

            $table->uuid('account_id')->index();
            $table->uuid('flow_id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('status')->default('draft');
            $table->timestampsTz();
            $table->softDeletesTz();

            $table->foreign('flow_id')
                ->references('id')
                ->on(config('form-flow.tables.flows', 'flows'))
                ->cascadeOnDelete();

            $table->index(['account_id', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.form_templates', 'form_templates'));
    }
};
