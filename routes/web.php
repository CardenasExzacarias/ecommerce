<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('product', ProductController::class);

Route::post('hola/adiosmecaesmal', function () {
    return 'Hola como estas';
})->name('saludo');
