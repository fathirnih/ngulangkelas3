<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdalahController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::resource('produk', ProdukController::class);
Route::resource('siswa', SiswaController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('users', UserController::class);

Route::resource('supplier', SupplierController::class);


Route::get( '/adalah', [AdalahController::class, 'index']);
Route::get( '/kalkulator', [AdalahController::class, 'kalkulator']);
Route::get( '/hasil', [AdalahController::class, 'hasil']);