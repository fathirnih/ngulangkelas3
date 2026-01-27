<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\AdalahController;

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| ROOT
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return auth()->check()
        ? redirect()->route('dashboard')
        : redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| AUTH PROTECTED
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('produk', ProdukController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('users', UserController::class);
    Route::resource('supplier', SupplierController::class);
});

/*
|--------------------------------------------------------------------------
| LAINNYA (PUBLIC)
|--------------------------------------------------------------------------
*/
Route::get('/adalah', [AdalahController::class, 'index'])->name('index');
Route::get('/form', [AdalahController::class, 'form'])->name('form');
Route::post('/hasil', [AdalahController::class, 'hasil'])->name('hasil');
Route::get('/register', [AdalahController::class, 'register'])->name('register');

Route::get('/form1', [AdalahController::class, 'form1'])->name('form1');
Route::post('/form1', [AdalahController::class, 'storeForm1'])->name('storeForm1');

Route::get('/form2', [AdalahController::class, 'form2'])->name('form2');
Route::post('/form2', [AdalahController::class, 'storeForm2'])->name('storeForm2');

Route::get('/form3', [AdalahController::class, 'form3'])->name('form3');
Route::post('/form3', [AdalahController::class, 'storeForm3'])->name('storeForm3');

Route::get('/reset', [AdalahController::class, 'reset'])->name('reset');
