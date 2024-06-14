<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeanController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('clients', ClientController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('public-sessions', CategoryController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('means', MeanController::class);
});
