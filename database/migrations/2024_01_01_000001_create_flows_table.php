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
        Schema::create(config('form-flow.tables.flows', 'flows'), function (Blueprint $table): void {
            if (config('form-flow.database.native_uuids', false)) {
                $table->uuid('id')->primary()->default(DB::raw('gen_random_uuid()'));
            } else {
                $table->uuid('id')->primary();
            }

            $table->string('key')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('owner_scope')->default('global');
            $table->uuid('account_id')->nullable()->index();
            $table->string('status')->default('draft');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['owner_scope', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.flows', 'flows'));
    }
};
