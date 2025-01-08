<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('product', ProductController::class);

Route::resource('ticket', TicketController::class, [
    'parameters' => [
        'ticket' => 'folio'
    ]
]);

Route::resource('sale', SaleController::class);

Route::post('hola/adiosmecaesmal', function () {
    return 'Hola como estas';
})->name('saludo');
