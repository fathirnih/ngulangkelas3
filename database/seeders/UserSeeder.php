<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
                'kota' => 'Jakarta',
                'no_hp' => '081234567801',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Budi',
                'kota' => 'Bandung',
                'no_hp' => '081234567802',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Citra',
                'kota' => 'Surabaya',
                'no_hp' => '081234567803',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Dewi',
                'kota' => 'Yogyakarta',
                'no_hp' => '081234567804',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Eko',
                'kota' => 'Semarang',
                'no_hp' => '081234567805',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
