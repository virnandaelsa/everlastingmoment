<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('pengguna')->insert(
            [
                [
                    'username' => 'u1',
                    'nama' => 'user1',
                    'password' => Hash::make('1'),
                ],
                [
                    'username' => 'u2',
                    'nama' => 'user2',
                    'password' => Hash::make('1'),
                ],
                [
                    'username' => 'u3',
                    'nama' => 'user3',
                    'password' => Hash::make('1'),
                ],
                [
                    'username' => 'u4',
                    'nama' => 'user4',
                    'password' => Hash::make('1'),
                ],
                [
                    'username' => 'u5',
                    'nama' => 'user5',
                    'password' => Hash::make('1'),
                ],
            ]
            );
        DB::table('pengguna')->insert(
            [
                [
                    'id_user' => '111',
                    'nama' => 'Savira Ciliania',
                    'no_telp' => '087615243654',
                    'email' => 'savirasilla@gmail.com',
                    'username' => 'saviraci75',
                    'password' => Hash::make('1'),
                    'foto' => '-.png',
                    'role' => '1',
                    'alamat' => 'Kab. Kediri',
                ],
            ]
            );
        DB::table('detailPJ')->insert(
            [
                [
                    'id_detailPJ' => '222',
                    'id_user' => '111',
                    'nama_toko' => 'Savira Wedding',
                    'kategori' => 'Make Up Artis',
                    'bank' => 'BRI',
                    'no_rek' => '7289108273391726',
                    'profil_tk' => '-.png',
                    'sampul_tk' => '-.png',
                ]
            ]
            );
        DB::table('katalog')->insert(
            [
                [
                    'id_katalog' => '333',
                    'id_detailPJ' => '222',
                    'judul' => 'Paket Make Up Arabian Look',
                    'deskripsi' => 'Arabian look identic dengan riasan di bagian mata dengan ciri bulu mata yang tebal dan menggunakan smokey eyes. ...',
                    // 'kategori' => 'sama pj',
                    // 'alamat' => 'sama pj',
                    // 'no_telp' => 'sama pj',
                    // 'id_tak hilangi review dan detail'
                    // 'id_tak hilangi review dan detail'
                    'metode_bayar' => '1',
                    // 'no_rek' => 'sama pj',
                ]
            ]
            );
        DB::table('dt_katalog')->insert(
            [
                [
                    'id_dt_katalog' => '777',
                    'judul_variasi' => 'merah',
                    'id_katalog' => '333',
                    'harga' => '2000000',
                    'gambar' => '1.jpg',
                ],
                [
                    'id_dt_katalog' => '888',
                    'judul_variasi' => 'biru',
                    'id_katalog' => '333',
                    'harga' => '3500000',
                    'gambar' => '2.jpg',
                ],
                [
                    'id_dt_katalog' => '999',
                    'judul_variasi' => 'kuning',
                    'id_katalog' => '333',
                    'harga' => '3000000',
                    'gambar' => '3.jpg',
                ],
            ]
            );
        DB::table('transaksi')->insert(
            [
                [
                    'id_transaksi' => '555',
                    'id_user' => '111',
                    'id_katalog' => '333',

                    'tanggal' => '2002/02/02',
                    'status' => '1',
                ]
            ]
            );
        DB::table('dt_transaksi')->insert(
            [
                [
                    'id_dt_transaksi' => '666',
                    'id_transaksi' => '555',

                    'ket' => 'Akad, Resepsi. Paket Lengkap orangtua dan pager ayu',
                    'bukti_tfDP' => '-.jgp',
                    'bukti_tfPelunasan' => '-.jgp',
                    'status_pembayaran' => '3',
                ]
            ]
            );
        DB::table('review')->insert(
            [
                [
                    'id_review' => '444',
                    'id_transaksi' => '555',

                    'kualitas' => '5',
                    'ketepatan' => '3',
                    'pelayanan' => '4',
                ]
            ]
            );
    }
}
