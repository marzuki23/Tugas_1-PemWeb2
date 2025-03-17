<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return ('Selamat datang');
});

Route::get('/produk', function () {
    return ('Ini halaman produk');
});

Route::get('/kategori', function () {
    return ('Ini halaman kategori');
});

Route::get('/keranjang', function () {
    return ('Ini halaman keranjang');
});

Route::get('/checkout', function () {
    return ('Ini halaman checkout');
});

Route::get('/pesanan', function () {
    return ('Ini halaman pesanan');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::middleware(['auth'])->group(function () {
//     Route::redirect('settings', 'settings/profile');

//     Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
//     Volt::route('settings/password', 'settings.password')->name('settings.password');
//     Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
// });

require __DIR__.'/auth.php';
