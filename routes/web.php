<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;

Route::get('/', [SiswaController::class, 'index']);
Route::get('/create', [SiswaController::class, 'create']);
Route::post('/store', [SiswaController::class, 'store']);
Route::get('/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/update/{id}', [SiswaController::class, 'update']);
Route::get('/delete/{id}', [SiswaController::class, 'destroy']);