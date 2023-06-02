<?php

use App\Http\Controllers\Admin\AkunTamuController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\DaftarKamarController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\KaryawanController;
use App\Http\Controllers\Admin\TamuController;
use App\Http\Controllers\Admin\TipeController;
use App\Http\Controllers\TransaksiController;
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

Route::get('/', [DashboardController::class, 'index'])->name('admin');

Route::resource('karyawan', KaryawanController::class);
Route::resource('tipe', TipeController::class);
Route::resource('fasilitas', FasilitasController::class);
Route::resource('tamu', TamuController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('akunTamu', AkunTamuController::class);
Route::resource('booking', BookingController::class);
Route::resource('daftarKamar', DaftarKamarController::class);
Route::get('transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
