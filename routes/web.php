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


Route::get('add',[App\Http\Controllers\CarController::class,'create']);
Route::post('add',[App\Http\Controllers\CarController::class,'store']);
Route::get('car',[App\Http\Controllers\CarController::class,'index']);
Route::get('edit/{id}',[App\Http\Controllers\CarController::class,'edit']);
Route::post('edit/{id}',[App\Http\Controllers\CarController::class,'update']);
Route::delete('{id}',[App\Http\Controllers\CarController::class,'destroy']);

Route::resource('/players',App\Http\Controllers\PlayerController::class);

Route::get('search',[App\Http\Controllers\PlayerController::class,'searchView'])->name('search');
Route::post('search',[App\Http\Controllers\PlayerController::class,'search']);
