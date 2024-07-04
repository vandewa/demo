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
        Schema::create('keterangan_lains', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->text('tunjangan_diterima')->nullable();
            $table->text('gaji_diharap')->nullable();
            $table->string('bersedia_ditempatkan')->nullable();
            $table->string('mematuhi_peraturan')->nullable();
            $table->text('keterangan_lain')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keterangan_lains');
    }
};
