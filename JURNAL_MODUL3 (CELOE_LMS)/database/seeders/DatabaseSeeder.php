<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)

        // Akun Dosen
        User::updateOrCreate(
            ['email' => 'budi.santoso@celoe.test'],
            [
                'name'        => 'Dr. Ir. Budi Santoso, M.T.',
                'password'    => Hash::make('password'),
                'role'        => 'dosen',
                'nomor_induk' => '198301101504 1001',
            ]
        );

        // Akun Mahasiswa
        User::updateOrCreate(
            ['email' => 'dzaki@celoe.test'],
            [
                'name'        => 'Muhammad Dzaki Al Falih',
                'password'    => Hash::make('password'),
                'role'        => 'mahasiswa',
                'nomor_induk' => '102042500207',
            ]
        );
    }
}