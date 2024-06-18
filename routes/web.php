<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SubkriteriaController;

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

/*dashboard*/
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

/*login&auth*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore'])->name('loginPost');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*global alternatif*/
Route::resource('alternatif', AlternatifController::class);
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/create', [AlternatifController::class, 'create']);
Route::post('/store', [AlternatifController::class, 'store']);

/*global kriteria*/
Route::resource('kriteria', KriteriaController::class);
Route::get('/kriteria', [KriteriaController::class, 'index'])->name('kriteria');
Route::get('/create', [KriteriaController::class, 'create']);
Route::post('/store', [KriteriaController::class, 'store']);
Route::put('/kriteria/{kriteria}', [KriteriaController::class, 'update'])->name('kriteria.update');

/*global subkriteria*/
Route::resource('subkriteria', SubkriteriaController::class);
Route::get('/subkriteria', [SubkriteriaController::class, 'index'])->name('subkriteria');
Route::get('/create', [SubkriteriaController::class, 'create']);
Route::post('/store', [SubkriteriaController::class, 'store']);
Route::put('/subkriteria/{subkriteria}', [SubkriteriaController::class, 'update'])->name('subkriteria.update');

Route::get('/penghitungan', function () {
    return view('penghitungan');
});

Route::get('/penilaianalternatif', function () {
    return view('/penghitungan/penilaianalternatif');
});

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});

/*route alternatif
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');

Route::get('/tambahalternatif', function () {
    return view('tambahalternatif');
});

Route::get('/create', [AlternatifController::class, 'create']);
Route::post('/store', [AlternatifController::class, 'store']);

Route::get('/tambahkriteria', function () {
    return view('tambahkriteria');
});
*/
