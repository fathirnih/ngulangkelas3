<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

//Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
//Route::resource('siswa', SiswaController::class)
  //  ->except(['index','show']);

  Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::resource('produk', ProdukController::class);
Route::resource('siswa', SiswaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('users', UserController::class);
