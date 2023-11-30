<?php

use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/catat', [ObatController::class, 'catat'])->name('catat');


Route::get('/dashboard', [ObatController::class, 'dashboard'])->name('dashboard');
Route::get('/tampilobat', [ObatController::class, 'indexObat'])->name('tampilobat');
Route::post('/tambah', [ObatController::class, 'addObat']);

Route::get('/edit/{id}', [ObatController::class, 'editObat']);
Route::post('/update/{id}', [ObatController::class, 'updateObat']);
Route::get('/hapus/{id}', [ObatController::class, 'delete']);


Route::get('/dashboard', [TransaksiController::class, 'dashboard'])->name('dashboard');
Route::get('/index_penjualan', [TransaksiController::class, 'indexTransaksi'])->name('index_penjualan');

Route::get('/tampilpenjualan', [TransaksiController::class, 'catat'])->name('tampilpenjualan');
Route::post('/tambahpenjualan', [TransaksiController::class, 'addTransaksi']);

Route::get('/editTransaksi/{id}', [TransaksiController::class, 'editTransaksi']);
Route::post('/updateTransaksi/{id}', [TransaksiController::class, 'updateTransaksi']);

Route::get('/delete/{id}', [TransaksiController::class, 'delete']);
