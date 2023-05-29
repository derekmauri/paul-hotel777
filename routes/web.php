<?php

use App\Http\Controllers\Auth\ChecAuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\GaleriController;
use App\Http\Controllers\User\KontakMamiController;
use App\Http\Controllers\User\ProfilController;
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


Route::get('/cekAuth', [ChecAuthController::class, 'index'])->name('cekAuth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/', [DashboardController::class, 'index'])->name('tamu');

Route::resource('profil', ProfilController::class);
Route::resource('galeriUser', GaleriController::class);
Route::resource('kontak', KontakMamiController::class);
Route::resource('user-booking', BookingController::class);
