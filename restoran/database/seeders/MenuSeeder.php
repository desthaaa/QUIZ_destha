<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menambahkan beberapa data contoh ke tabel menus
        DB::table('menus')->insert([
            ['name' => 'Nasi Goreng', 'category' => 'makanan utama', 'price' => 15000.00, 'availability' => true],
            ['name' => 'Teh Manis', 'category' => 'minuman', 'price' => 5000.00, 'availability' => true],
            ['name' => 'Es Krim', 'category' => 'makanan penutup', 'price' => 20000.00, 'availability' => true],
        ]);
    }
}
