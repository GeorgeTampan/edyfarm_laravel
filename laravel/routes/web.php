<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil/create', [App\Http\Controllers\ProfilController::class,'create'])->name('profil.create');
Route::post('/profil', [App\Http\Controllers\ProfilController::class,'store'])->name('profil.store');

Route::get('/ternak/create', [App\Http\Controllers\TernakController::class,'create'])->name('ternak.create');
Route::post('/ternak', [App\Http\Controllers\TernakController::class,'store'])->name('ternak.store');
Route::get('/ternak', [App\Http\Controllers\TernakController::class,'index'])->name('ternak.index');
Route::get('/ternak/{ternak}/edit', [App\Http\Controllers\TernakController::class,'edit'])->name('ternak.edit');
Route::patch('/ternak/{ternak}', [App\Http\Controllers\TernakController::class,'update'])->name('ternak.update');
Route::delete('/ternak/{ternak}', [App\Http\Controllers\TernakController::class,'destroy'])->name('ternak.destroy');

Route::get('/penjualan/create', [App\Http\Controllers\PenjualanController::class,'create'])->name('penjualan.create');
Route::post('/penjualan', [App\Http\Controllers\PenjualanController::class,'store'])->name('penjualan.store');
Route::get('/penjualan', [App\Http\Controllers\PenjualanController::class,'index'])->name('penjualan.index');

Route::get('/hutang/create', [App\Http\Controllers\HutangController::class,'create'])->name('hutang.create');
Route::post('/hutang', [App\Http\Controllers\HutangController::class,'store'])->name('hutang.store');
Route::get('/hutang', [App\Http\Controllers\HutangController::class,'index'])->name('hutang.index');
Route::delete('/hutang/{hutang}', [App\Http\Controllers\HutangController::class,'destroy'])->name('hutang.destroy');

Route::get('/login', [App\Http\Controllers\AdminController::class,'index'])->name('login.index');
Route::get('/logout', [App\Http\Controllers\AdminController::class,'logout'])->name('login.logout');
Route::post('/login', [App\Http\Controllers\AdminController::class,'process'])->name('login.process');
Route::get('/login/register', [App\Http\Controllers\AdminController::class,'register'])->name('login.register');
Route::post('/login/register', [App\Http\Controllers\AdminController::class,'store'])->name('login.store');

Route::get('/landing', [App\Http\Controllers\LandingController::class,'index'])->name('landing.index');