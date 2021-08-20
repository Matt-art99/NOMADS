<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{DashboardController};
use App\Http\Controllers\{CheckoutController, DetailControler ,HomeController};

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailControler::class, 'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout-success');

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('travel-package', '\App\Http\Controllers\Admin\TravelPackageController')->except('show');
    
});


Auth::routes(['verify' => true]);

