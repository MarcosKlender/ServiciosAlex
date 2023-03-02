<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StocksController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', ProductsController::class);

Route::resource('orders', OrdersController::class);

Route::get('/search/report' , [SearchController::class, 'report'])->name('search.report');
Route::resource('search', SearchController::class);

Route::resource('stocks', StocksController::class);

Route::get('/export' , [OrdersController::class, 'exportOrders'])->name('orders.export');

require __DIR__.'/auth.php';
