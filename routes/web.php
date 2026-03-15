<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [CompanyProfileController::class, 'index'])->name('welcome');

// Form pesanan
Route::get('/order', [OrderController::class, 'create'])->name('order');

// Lacak pesanan
Route::get('/lacak', [OrderController::class, 'track'])->name('orders.track');

// API JSON – dipanggil oleh JavaScript di halaman tracking
Route::get('/api/orders/search', [OrderController::class, 'search']);
