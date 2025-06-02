<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

// Route::get('/', function () {
    //return view('dashboard');
//});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
   