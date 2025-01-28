<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'index')->name('index');
Route::post('/', 'attempt')->name('attempt');
Route::get('identify', 'identify')->name('identify');
