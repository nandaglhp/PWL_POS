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
        Schema::create('stok', function (Blueprint $table) {
            $table->id('stok_id');
            $table->foreignId('barang_id')->references('barang_id')->on('barang');
            $table->foreignId('user_id')->references('user_id')->on('user');
            $table->dateTime('stok_tanggal');
            $table->integer('stok_jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stok');
    }
};
