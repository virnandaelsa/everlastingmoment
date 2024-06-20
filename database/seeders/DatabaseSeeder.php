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
    }
}
