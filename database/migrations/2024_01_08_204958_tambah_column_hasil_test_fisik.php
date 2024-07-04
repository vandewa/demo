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
        Schema::table('test_fisiks', function (Blueprint $table) {
            $table->integer('push_up')->nullable();
            $table->integer('sit_up')->nullable();
            $table->integer('pull_up')->nullable();
            $table->integer('lari')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tes_fisiks', function (Blueprint $table) {
            //
        });
    }
};
