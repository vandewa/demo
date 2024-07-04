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
        Schema::create('pengurusan_berkas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lamaran_id');
            $table->string('jenis_berkas')->nullable();
            $table->datetime('tanggal_upload')->nullable();
            $table->datetime('path')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurusan_berkas');
    }
};
