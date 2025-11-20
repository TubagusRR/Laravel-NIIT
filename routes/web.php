<?php

use Illuminate\Support\Facades\Route;

// HALAMAN UNTUK GUEST (BELUM LOGIN)
Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    })->name('home');
});

// HALAMAN UNTUK USER LOGIN + ADMIN
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
});

// ROUTE AUTH BAWAAN (login, register, dll)
require __DIR__.'/auth.php';
