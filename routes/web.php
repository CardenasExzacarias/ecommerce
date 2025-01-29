<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('ticket');
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

    Route::prefix('user')
        ->name('user')
        ->controller(UserController::class)
        ->group(function () {
            Route::get('edit', 'edit')
                ->name('.edit');

            Route::get('update', 'update')
                ->name('.update');
        });
});
