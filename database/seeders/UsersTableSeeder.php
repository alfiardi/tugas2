<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Jalankan proses seeding database.
     *
     * @return void
     */
    public function run(): void
    {
        // Menggunakan query builder untuk menyisipkan data ke tabel 'users'
        DB::table('users')->insert([
            [
                'name' => 'Andi',
                'email' => 'andi@example.com',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budi',
                'email' => 'budi@example.com',
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Citra',
                'email' => 'citra@example.com',
                'active' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
