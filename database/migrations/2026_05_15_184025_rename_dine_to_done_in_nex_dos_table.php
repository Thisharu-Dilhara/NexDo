<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('nex_dos', function (Blueprint $table) {
            $table->renameColumn('dine', 'done');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nex_dos', function (Blueprint $table) {
            $table->renameColumn('done', 'dine');
        });
    }
};