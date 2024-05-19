<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/dashboard', function () {
    return view('dashboard');
});*/

Route::resource('alternatif', AlternatifController::class);

Route::resource('kriteria', KriteriaController::class);
Route::put('/kriteria/{kriteria}', [KriteriaController::class, 'update'])->name('kriteria.update');



Route::get('/penghitungan', function () {
    return view('penghitungan');
});

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});

/*Route::get('/login', function () {
    return view('auth/login');
});*/

Route::get('/login', [loginController::class, 'index']);
Route::post('/login/autentikasi', [loginController::class, 'login']);

/*route login
Route::get('/login', [LoginController::class, 'index'])->name('login');*/

/*route alternatif*/
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');

Route::get('/tambahalternatif', function () {
    return view('tambahalternatif');
});

Route::get('/create', [AlternatifController::class, 'create']);
Route::post('/store', [AlternatifController::class, 'store']);

Route::get('/tambahkriteria', function () {
    return view('tambahkriteria');
});