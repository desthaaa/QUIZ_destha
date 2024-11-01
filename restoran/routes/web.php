<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate-report', [ReportController::class, 'generateReport']);

Route::get('/menus', function () {
    $menus = DB::table('menus')->get();
    return view('menus.index', ['menus' => $menus]);
});

Route::get('/customers', function () {
    $customers = DB::table('customers')->get();
    return view('customers.index', ['customers' => $customers]);
});

Route::get('/orders', function () {
    $orders = DB::table('orders')->get();
    return view('orders.index', ['orders' => $orders]);
});

