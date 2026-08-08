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
            $table->uuid('id')->primary()->default(DB::raw('uuidv7()'));

            $table->string('key')->unique();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('owner_scope')->default('global');
            $table->uuid('account_id')->nullable()->index();
            $table->string('status')->default('draft');
            $table->timestampsTz();
            $table->softDeletesTz();

            $table->index(['owner_scope', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists(config('form-flow.tables.flows', 'flows'));
    }
};
