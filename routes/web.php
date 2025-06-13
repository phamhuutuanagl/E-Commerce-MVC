<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {

    // Login
    Route::prefix('login')
        ->name('login.')
        ->group(function () {
            Route::get('/', 'index')->name('get');
            Route::post('/', 'login')->name('post');
        });

    
});