<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('keterangan_lains', function (Blueprint $table) {
            $table->boolean('status')->default('0')->after('keterangan_lain');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('keterangan_lains', function (Blueprint $table) {
            //
        });
    }
};
