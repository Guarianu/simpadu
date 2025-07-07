<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;

// Route::get('/', function () {
    //return view('dashboard');
//});

Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
// Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/prodi', ProdiController::class);
Route::put('/prodi/ {id}', [ProdiController::class, 'update'])->name('prodi.update');