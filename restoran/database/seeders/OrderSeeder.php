<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order; 
use App\Models\Customer;
use App\Models\Menu; 

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = Customer::first();
        $menu = Menu::first();

        Order::create([
            'customer_id' => $customer->id, 
            'menu_id' => $menu->id,
            'quantity' => 2,
            'status' => 'sedang disiapkan',
        ]);
    }
}
