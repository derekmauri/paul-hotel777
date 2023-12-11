<?php

use App\Http\Controllers\Pimpinan\DashboardController;
use App\Http\Controllers\Pimpinan\KaryawanController;
use App\Http\Controllers\Pimpinan\TamuController;
use App\Http\Controllers\Pimpinan\GaleriController;
use App\Http\Controllers\Pimpinan\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('admin.dashboard.index');
// });


Route::get('/', [DashboardController::class, 'index'])->name('pimpinan');

Route::resource('karyawan-pimpinan', KaryawanController::class);
Route::resource('tamu-pimpinan', TamuController::class);
Route::resource('galeri-pimpinan', GaleriController::class);

Route::get('transaksi-pimpinan', [TransaksiController::class, 'index'])->name('transaksi-pimpinan.index');
