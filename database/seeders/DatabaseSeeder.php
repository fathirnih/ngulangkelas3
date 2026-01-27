<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProdukSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SupplierSeeder::class,);
        // User::factory(10)->create();

       User::create([
            'nama'     => 'Administrator',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role'     => 'admin',
            'kota'     => 'Jakarta',
            'no_hp'    => '081234567890',
        ]);
    }
}
