<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/facilities', function () {
    return view('fasilitas');
})->name('facilities');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route untuk menampilkan form pemesanan
Route::get('/pesan', function () {
    return view('pesan');
})->name('pesan');

use App\Http\Controllers\adminController;
// Route untuk Admin Dashboard
Route::get('/admin/dashboard', [adminController::class, 'dashboard'])->name('admin.dashboard');

// Route untuk Kelola Kamar
Route::get('/admin/rooms', [adminController::class, 'rooms'])->name('admin.rooms');

// Route untuk Pesanan
Route::get('/admin/orders', [adminController::class, 'orders'])->name('admin.orders');

// Route untuk Ulasan
Route::get('/admin/reviews', [adminController::class, 'reviews'])->name('admin.reviews');

use App\Http\Controllers\kamarController;
// Route untuk Kelola Kamar
Route::get('/room', [kamarController::class, 'view'])->name('room');