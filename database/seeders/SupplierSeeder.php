<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::insert([
            [
                'nama' => 'CV Sumber Jaya',
                'kota' => 'Jakarta',
                'cp'   => '081234567890'
            ],
            [
                'nama' => 'PT Maju Bersama',
                'kota' => 'Bandung',
                'cp'   => '082233445566'
            ],
            [
                'nama' => 'UD Sejahtera',
                'kota' => 'Surabaya',
                'cp'   => '085677889900'
            ],
            [
                'nama' => 'CV Makmur Abadi',
                'kota' => 'Semarang',
                'cp'   => '081998877665'
            ],
            [
                'nama' => 'PT Sentosa',
                'kota' => 'Yogyakarta',
                'cp'   => '083812345678'
            ],
        ]);
    }
}
