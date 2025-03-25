<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/',                [ProductController::class, 'index'])->name('index');
        Route::get('/{id}/show',       [ProductController::class, 'show'])->name('show');
        Route::get('/create',          [ProductController::class, 'create'])->name('create');
        Route::post('/store',          [ProductController::class, 'store'])->name('store');
        Route::get('/{id}/edit',       [ProductController::class, 'edit'])->name('edit');
        Route::put('/{id}/update',     [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}/destroy', [ProductController::class, 'destroy'])->name('destroy');
    });
});
