<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tBarang")->insert([
            [
                'satuan'=>'box',
                'namaBarang'=>'Keramik',
                'kdBarang'=>'K001',
                'hargaJual'=>'50.000',
                'hargaBeli'=>'40.000',
                'stok'=>'100',
                'status'=>'available',
            ]
        ]);
    }
}
