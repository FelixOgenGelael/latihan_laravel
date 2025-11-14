<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Membuat alamat halaman baru
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/user/{id}', [HomeController::class, 'show'])->name('users.show');
// name digunakan untuk memberi nama pada sebuah alamat

Route::get('/fitur', function () {
    return view('feature');
})->name('feature');
