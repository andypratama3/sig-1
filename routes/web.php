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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/maps', [App\Http\Controllers\MapsController::class, 'index'])->name('maps.index');


Route::resource('jenisTanamen', App\Http\Controllers\JenisTanamanController::class);


Route::resource('petanis', App\Http\Controllers\PetaniController::class);


Route::resource('lahans', App\Http\Controllers\LahanController::class);
