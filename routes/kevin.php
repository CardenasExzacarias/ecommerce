
<?php

use Illuminate\Support\Facades\Route;
use App\Repositories\ProductRepository;



Route::get('/test', function(){
    $products = ProductRepository::all();
    return view('Pruebas.Kevtest', compact('products'));
});
