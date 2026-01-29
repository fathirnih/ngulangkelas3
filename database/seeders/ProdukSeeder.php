<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('produk')->insert([
            [
                'nama_barang' => 'Pensil',
                'harga' => 2000,
                'deskripsi' => 'Pensil kayu standar untuk menulis',
                'jumlah' => 100,
                'image' => 'pensil.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Buku Tulis',
                'harga' => 5000,
                'deskripsi' => 'Buku tulis isi 38 lembar',
                'jumlah' => 200,
                'image' => 'buku_tulis.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Penghapus',
                'harga' => 1500,
                'deskripsi' => 'Penghapus karet warna putih',
                'jumlah' => 150,
                'image' => 'penghapus.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Penggaris',
                'harga' => 2500,
                'deskripsi' => 'Penggaris plastik 30 cm',
                'jumlah' => 80,
                'image' => 'penggaris.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Spidol',
                'harga' => 3500,
                'deskripsi' => 'Spidol permanen hitam',
                'jumlah' => 120,
                'image' => 'spidol.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Pulpen',
                'harga' => 3000,
                'deskripsi' => 'Pulpen tinta biru',
                'jumlah' => 250,
                'image' => 'pulpen.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Buku Gambar',
                'harga' => 8000,
                'deskripsi' => 'Buku gambar A4 50 lembar',
                'jumlah' => 60,
                'image' => 'buku_gambar.jpeg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Kertas HVS',
                'harga' => 25000,
                'deskripsi' => 'Kertas HVS A4 500 lembar',
                'jumlah' => 40,
                'image' => 'kertas_hvs.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Stabilo',
                'harga' => 4000,
                'deskripsi' => 'Stabilo warna-warni',
                'jumlah' => 90,
                'image' => 'stabilo.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Notes',
                'harga' => 6000,
                'deskripsi' => 'Notes kecil untuk catatan',
                'jumlah' => 150,
                'image' => 'notes.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Map File',
                'harga' => 10000,
                'deskripsi' => 'Map file plastik A4',
                'jumlah' => 70,
                'image' => 'map_file.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Kertas Karton',
                'harga' => 15000,
                'deskripsi' => 'Karton warna-warni A4',
                'jumlah' => 60,
                'image' => 'kertas_karton.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Amplop',
                'harga' => 1000,
                'deskripsi' => 'Amplop coklat ukuran C4',
                'jumlah' => 300,
                'image' => 'amplop.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Lem',
                'harga' => 5000,
                'deskripsi' => 'Lem kertas 50ml',
                'jumlah' => 80,
                'image' => 'lem.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_barang' => 'Tipe-X',
                'harga' => 4000,
                'deskripsi' => 'Tipe-X untuk koreksi tinta',
                'jumlah' => 120,
                'image' => 'tipex.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
