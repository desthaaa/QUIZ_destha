<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Haechan',
            'table_number' => 1,
            'contact' => '081234567890',
        ]);

        Customer::create([
            'name' => 'Mark',
            'table_number' => 2,
            'contact' => '081298765432',
        ]);

        Customer::create([
            'name' => 'Jisung',
            'table_number' => 3,
            'contact' => null,
        ]);

        Customer::create([
            'name' => 'Jeno',
            'table_number' => 4,
            'contact' => '082345678901',
        ]);

    }
}
