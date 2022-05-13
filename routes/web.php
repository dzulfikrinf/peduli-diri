<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerjalananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CariController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::any('/postlogin',[LoginController::class,'login']);

Route::get('/registrasi',[RegisterController::class, 'index'])->middleware('guest');
Route::post('/simpanUser', [RegisterController::class,'register']);

Route::get('/dashboard', [PerjalananController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/input', [PerjalananController::class, 'inputDataPerjalanan'])->name('input')->middleware('auth');
Route::post('/simpanPerjalanan',[PerjalananController::class,'simpanPerjalanan']);
Route::get('/data', [PerjalananController::class, 'tampildata'])->name('data')->middleware('auth');
Route::get('/cari', [CariController::class, 'cariPerjalanan'])->middleware('auth');

Route::get('/editdata/{id}', [PerjalananController::class, 'editData'])->middleware('auth');
Route::post('/updatedata', [PerjalananController::class, 'updateData'])->middleware('auth');

Route::get('/hapusdata/{id}', [PerjalananController::class, 'hapusData'])->middleware('auth');

Route::get('/edit', [PerjalananController::class, 'edit'])->middleware('auth');



Route::get('/logout',[LoginController::class,'logout'])->middleware('auth');