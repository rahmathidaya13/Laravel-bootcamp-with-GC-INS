<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'index'])->name('register');
Route::post('/welcome', [AuthController::class, 'register'])->name('register.submit');
Route::get('/cast', [CastController::class, 'index'])->name('cast');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{cast_id}', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/update/{cast_id}', [CastController::class, 'update'])->name('cast.update');
Route::get('/cast/delete/{cast_id}', [CastController::class, 'destroy'])->name('cast.delete');
Route::get('/cast/show/{cast_id}', [CastController::class, 'show'])->name('cast.show');

