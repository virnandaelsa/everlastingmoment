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
        Schema::create('penyedia_jasa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko');

            $table->string('alamat')->nullable();
            $table->string('kategori');
            $table->string('nomor_rekening')->unique()->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('fotoprofil_toko')->nullable();
            $table->string('fotosampul_toko')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyedia_jasa');
    }
};
