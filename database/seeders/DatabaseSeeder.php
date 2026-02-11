<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Hapus atau beri komentar user lain jika tidak diperlukan
        // dan fokus pada satu user admin yang jelas.
        User::firstOrCreate(
            ['email' => 'akunc4086@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'lailadwikartika@gmail.com'],
            [
                'name' => 'SMK Nasional Nganjuk',
                'password' => Hash::make('laila123'),
            ]
        );
    }
}
