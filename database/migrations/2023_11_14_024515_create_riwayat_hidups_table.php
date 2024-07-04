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
        Schema::create('riwayat_hidups', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('kota')->nullable();
            $table->string('sampai_kls')->nullable();
            $table->date('dari')->nullable();
            $table->date('sampai')->nullable();
            $table->string('jurusan')->nullable();
            $table->integer('ijazah')->nullable();
            $table->string('lama_kursus')->nullable();
            $table->string('sertifikat')->nullable();
            $table->string('instansi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('gaji')->nullable();
            $table->string('tunjangan')->nullable();
            $table->string('alasan_berhenti')->nullable();
            $table->string('negara')->nullable();
            $table->string('tujuan')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('sebagai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_hidups');
    }
};
