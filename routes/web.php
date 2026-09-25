<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});

Route::resource('pelanggan', PelangganController::class);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('layanan', LayananController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('transaksi', TransaksiController::class);