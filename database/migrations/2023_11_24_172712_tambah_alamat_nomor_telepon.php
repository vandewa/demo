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
        Schema::table('riwayat_hidups', function (Blueprint $table) {
            $table->text('alamat')->after('sebagai')->nullable();
            $table->string('telepon')->after('alamat')->nullable();
            $table->string('hubungan')->after('telepon')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_hidups', function (Blueprint $table) {
            //
        });
    }
};
