<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function generateReport()
    {
        $menus = \DB::table('menus')->get();
        $customers = \DB::table('customers')->get();
        $orders = \DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('menus', 'orders.menu_id', '=', 'menus.id')
            ->select('orders.id AS order_id', 'customers.name AS customer_name', 'menus.name AS menu_name', 'orders.quantity', 'orders.status')
            ->get();

        $data = [
            'menus' => $menus,
            'customers' => $customers,
            'orders' => $orders,
        ];
        
        $pdf = PDF::loadView('report', $data);
        return $pdf->download('report.pdf');
    }
}
