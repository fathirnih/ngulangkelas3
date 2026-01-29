<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        User::insert([
            [
                'nama' => 'Andi',
                'email' => 'andi@gmail.com',
                'password' => Hash::make('123456'),
                'kota' => 'Jakarta',
                'no_hp' => '081234567801',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Budi',
                'email' => 'budi@gmail.com',
                'password' => Hash::make('123456'),
                'kota' => 'Bandung',
                'no_hp' => '081234567802',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Citra',
                'email' => 'citra@gmail.com',
                'password' => Hash::make('123456'),
                'kota' => 'Surabaya',
                'no_hp' => '081234567803',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Dewi',
                'email' => 'dewi@gmail.com',
                'password' => Hash::make('123456'),
                'kota' => 'Yogyakarta',
                'no_hp' => '081234567804',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Eko',
                'email' => 'eko@gmail.com',
                'password' => Hash::make('123456'),
                'kota' => 'Semarang',
                'no_hp' => '081234567805',
                'role' => 'user',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
