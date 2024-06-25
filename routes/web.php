<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MeanController;
use App\Http\Controllers\PublicSessionController;
use App\Http\Controllers\SpendingController;
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
    Route::resource('clients.means', MeanController::class);
    Route::resource('clients.public-sessions', PublicSessionController::class);
    Route::resource('clients.suppliers', SupplierController::class);
    Route::resource('clients.spendings', SpendingController::class);

    Route::get('/clients/{client}/spendings-means/create', [SpendingController::class, 'createMeans'])->name('clients.spending-mean.create');
    Route::post('/clients/{client}/spendings-means', [SpendingController::class, 'storeMeans'])->name('clients.spending-mean.store');
    Route::get('/clients/{client}/spendings-means/{spendingMean}/edit', [SpendingController::class, 'editMeans'])->name('clients.spending-mean.edit');
    Route::put('/clients/{client}/spendings-means/{spendingMean}', [SpendingController::class, 'updateMeans'])->name('clients.spending-mean.update');
    Route::delete('/clients/{client}/spendings-means/{spendingMean}', [SpendingController::class, 'destroyMeans'])->name('clients.spending-mean.destroy');

    Route::get('clients/{client}/spendings-suppliers/create', [SpendingController::class, 'createSuppliers'])->name('clients.spending-supplier.create');
    Route::post('clients/{client}/spendings-suppliers', [SpendingController::class, 'storeSuppliers'])->name('clients.spending-supplier.store');
    Route::get('clients/{client}/spendings-suppliers/{spendingSupplier}/edit', [SpendingController::class, 'editSuppliers'])->name('clients.spending-supplier.edit');
    Route::put('clients/{client}/spendings-suppliers/{spendingSupplier}', [SpendingController::class, 'updateSuppliers'])->name('clients.spending-supplier.update');
    Route::delete('clients/{client}/spendings-suppliers/{spendingSupplier}', [SpendingController::class, 'destroySuppliers'])->name('clients.spending-supplier.destroy');
});
