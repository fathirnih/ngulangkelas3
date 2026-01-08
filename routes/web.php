<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index'])->name('siswa.index');
Route::resource('siswa', SiswaController::class)
    ->except(['index','show']);