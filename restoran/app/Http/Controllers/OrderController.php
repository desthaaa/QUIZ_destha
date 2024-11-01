<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')->get();

        return view('orders.index', ['orders' => $orders]);
    }
}
