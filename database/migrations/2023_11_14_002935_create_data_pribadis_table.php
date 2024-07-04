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
        Schema::create('data_pribadis', function (Blueprint $table) {
            $table->id();
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('hoby')->nullable();
            $table->string('or_yg_dikuasai')->nullable();
            $table->string('sakit')->nullable();
            $table->string('sakit_apa')->nullable();
            $table->string('sakit_kapan')->nullable();
            $table->string('kecelakaan')->nullable();
            $table->string('kecelakaan_ket')->nullable();
            $table->string('kecelakaan_kapan')->nullable();
            $table->string('kecelakaan_akibat')->nullable();
            $table->string('kegiatan_terlarang')->nullable();
            $table->string('polisi')->nullable();
            $table->string('polisi_ket')->nullable();
            $table->string('astek')->nullable();
            $table->string('no_kpa')->nullable();
            $table->string('penataran')->nullable();
            $table->string('penataran_pola')->nullable();
            $table->string('penataran_penyelenggara')->nullable();
            $table->string('bahasa_1')->nullable();
            $table->string('bahasa_2')->nullable();
            $table->string('bahasa_3')->nullable();
            $table->string('bahasa_4')->nullable();
            $table->string('sim')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pribadis');
    }
};
