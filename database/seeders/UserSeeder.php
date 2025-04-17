<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            [
                'nama' => 'dr. Bram',
                'alamat' => 'Semarang',
                'no_hp' => '081234567891',
                'email' => 'dokter1@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'dr. Farhan',
                'alamat' => 'Semarang',
                'no_hp' => '089876543210',
                'email' => 'dokter2@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Iqbal',
                'alamat' => 'Semarang',
                'no_hp' => '081234567690',
                'email' => 'pasien1@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Isna',
                'alamat' => 'Semarang',
                'no_hp' => '081234567790',
                'email' => 'pasien2@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
