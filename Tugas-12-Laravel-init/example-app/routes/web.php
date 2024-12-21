<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [DashboardController::class, 'index']);

Route::get('/register', [AuthController::class,'register'])->name('register');

Route::post('/welcome', [AuthController::class,'welcome']);

Route::get('/master', function () {
  return view('layouts.master');
})->name('master');

Route::get('/table', function () {
  return view('table');
})->name('table');

Route::get('/data-table', function () {
  return view('data-table');
})->name('data-table');


// Casts
Route::get('/casts', [CastController::class,'index'])->name('casts');

Route::get('/casts/create', [CastController::class,'create'])->name('casts_create');
Route::post('/casts', [CastController::class,'store'])->name('casts_store');

Route::get('/casts/{cast_id}', [CastController::class,'show'])->name('casts_show');
Route::get('/casts/{cast_id}/edit', [CastController::class,'edit'])->name('casts_edit');
Route::put('/casts/{cast_id}', [CastController::class,'update'])->name('casts_update');
Route::delete('/casts/{cast_id}', [CastController::class,'delete'])->name('casts_delete');
