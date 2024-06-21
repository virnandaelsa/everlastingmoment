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
//         Schema::create('catalogs', function (Blueprint $table) {
//             $table->id();
//             $table->string('judul_jasa');
//             $table->text('deskripsi_jasa');
//             $table->string('kategori_jasa');
//             $table->string('alamat');
//             $table->string('nomor_telepon');
//             $table->string('gambar_katalog')->nullable();
//             $table->string('metode_pembayaran');
//             $table->string('nomor_rekening');
//             $table->timestamps();
//         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('catalogs');
    }
};
