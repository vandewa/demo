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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('layanan_id');
            $table->date('tanggal_tagihan');
            $table->string('nama_tagihan')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('jumlah')->nullable();
            $table->date('tanggal_pelunasan')->nullable();
            $table->string('pembayaran_tp')->nullable();
            $table->string('bukti_bayar')->nullable();
            $table->unsignedBigInteger('ref_id')->nullable()->comment('referensi ketika di tolak bikin isian baru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
