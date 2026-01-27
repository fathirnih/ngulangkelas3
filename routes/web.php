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


Route::get( '/adalah', [AdalahController::class, 'index'])->name('index');
Route::get( '/form', [AdalahController::class, 'form'])->name('form');
Route::post( '/hasil', [AdalahController::class, 'hasil'])->name('hasil');
Route::get( '/register', [AdalahController::class, 'register'])->name('register');
//Route::post( '/daftar', [AdalahController::class, 'daftar'])->name('daftar');
//Route::get( '/form1', [AdalahController::class, 'form1'])->name('form1');
//Route::get( '/form2', [AdalahController::class, 'form2'])->name('form2');
//Route::get( '/form3', [AdalahController::class, 'form3'])->name('form3');

Route::get('/form1', [AdalahController::class, 'form1'])->name('form1');
Route::post('/form1', [AdalahController::class, 'storeForm1'])->name('storeForm1');

Route::get('/form2', [AdalahController::class, 'form2'])->name('form2');
Route::post('/form2', [AdalahController::class, 'storeForm2'])->name('storeForm2');

Route::get('/form3', [AdalahController::class, 'form3'])->name('form3');
Route::post('/form3', [AdalahController::class, 'storeForm3'])->name('storeForm3');

Route::get('/index', [AdalahController::class, 'index'])->name('index');

Route::get('/reset', [AdalahController::class, 'reset'])->name('reset');

