<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('user', \App\Http\Controllers\UserController::class); 
Route::resource('dashboard',\App\Http\Controllers\DashboardController::class); 
Route::resource('jenis',\App\Http\Controllers\JenisController::class); 
Route::resource('menu',\App\Http\Controllers\MenuController::class); 
Route::resource('distributors',\App\Http\Controllers\DistributorController::class);
Route::resource('pelanggan',\App\Http\Controllers\PelangganController::class); 
Route::resource('beli',\App\Http\Controllers\BeliController::class); 

