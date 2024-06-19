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
        //
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->unsignedBigInteger('id_detail_produk');

            $table->string('deskripsi_produk')->nullable();
            $table->string('kategori');
            $table->string('alamat')->nullable();
            $table->string('no_hp')->unique()->nullable();
            $table->integer('harga');
            $table->string('foto_katalog_produk')->nullable();

            $table->foreign('id_detail_produk')->references('id_detail_produk')->on('detail_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('produk');
    }
};
