<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeanController;
use App\Http\Controllers\PublicSessionController;
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
    Route::resource('clients.means', MeanController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('clients.public-sessions', PublicSessionController::class);
    Route::resource('clients.suppliers', SupplierController::class);
});
