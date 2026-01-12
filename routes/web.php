<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

//Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
//Route::resource('siswa', SiswaController::class)
  //  ->except(['index','show']);

Route::resource('produk', ProdukController::class);