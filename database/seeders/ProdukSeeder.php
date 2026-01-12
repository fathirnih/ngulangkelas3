<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'nama_barang' => 'Pensil',
                'jumlah' => 100,
            ],
            [
                'nama_barang' => 'Buku Tulis',
                'jumlah' => 200,
            ],
            [
                'nama_barang' => 'Penghapus',
                'jumlah' => 150,
            ],
        ]);
    }
}
