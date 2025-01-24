<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ConfigurationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/search', [ProductController::class, 'search'])
    ->name('product.search');

Route::resource('product', ProductController::class, [
    'parameters' => [
        'product' => 'barcode'
    ]
]);

Route::resource('ticket', TicketController::class, [
    'parameters' => [
        'ticket' => 'folio'
    ]
]);

Route::resource('sale', SaleController::class);

Route::resource('configuration', ConfigurationController::class);
