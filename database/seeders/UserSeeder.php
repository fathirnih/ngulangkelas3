<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'nama' => 'Andi',
                'kota' => 'Jakarta'
            ],
            [
                'nama' => 'Budi',
                'kota' => 'Bandung'
            ],
            [
                'nama' => 'Citra',
                'kota' => 'Surabaya'
            ],
            [
                'nama' => 'Dewi',
                'kota' => 'Yogyakarta'
            ],
            [
                'nama' => 'Eko',
                'kota' => 'Semarang'
            ],
        ]);
    }
}
