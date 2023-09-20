<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
// use App\Http\Controllers\MasterController;




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


// Route::get('/', function () {
//     return view('template.master');
// })->name('blank_page');

// // Route::get('/', [AuthorController::class, 'index'])->name('index');
// Route::get('/anggota', [AnggotaController::class, 'create'])->name('anggota');
// Route::get('/buku', [BukuController::class, 'create'])->name('buku');
// Route::get('/petugas', [PetugasController::class, 'create'])->name('petugas');
// Route::get('/rak', [RakController::class, 'create'])->name('rak');
// Route::get('/peminjaman', [PeminjamanController::class, 'create'])->name('peminjaman');
// Route::get('/pengembalian', [PengembalianController::class, 'create'])->name('pengembalian');

Route::get('/buku', [BukuController::class, 'create'])->name('buku');
route::get('/master', function () {
    return view('template.master');
}); 
Route::resource('/anggota', AnggotaController::class);
Route::resource('/petugas', PetugasController::class);

