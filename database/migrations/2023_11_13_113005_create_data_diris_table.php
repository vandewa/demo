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
        Schema::create('data_diris', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('marital_tp')->nullable();
            $table->string('sex_tp')->nullable();
            $table->string('ktp')->nullable();
            $table->string('telepon')->nullable();
            $table->string('telepon_wali')->nullable();
            $table->string('blod_tp')->nullable();
            $table->string('ukuran_sepatu')->nullable();
            $table->string('ukuran_baju')->nullable();
            $table->text('alamat_sekarang')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->string('education_tp')->nullable();
            $table->text('keterampilan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diris');
    }
};
