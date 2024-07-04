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
        Schema::create('hasil_psikotes', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('psikotes')->nullable();
            $table->string('logika')->nullable();
            $table->string('tiu')->nullable();
            $table->string('skolastik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_psikotes');
    }
};
