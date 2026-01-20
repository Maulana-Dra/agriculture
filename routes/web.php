<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/product/{id}', function ($id) {
    return view('product', compact('id'));
})->name('product');

Route::get('/purchase-history', function () {
    return view('purchase_history');
})->name('purchase-history');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard');
})->name('admin-dashboard');

Route::get('/admin-iot-dashboard', function () {
    return view('admin-iot-dashboard');
})->name('admin-iot-dashboard');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/api/plants', [PlantController::class, 'index']);

Route::get('/api/purchase-history', [DashboardController::class, 'purchaseHistory']);
