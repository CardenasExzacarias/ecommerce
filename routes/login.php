<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'attempt')->name('.attempt');
    Route::get('identify', 'identify')->name('.identify');
});
