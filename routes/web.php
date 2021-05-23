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

 
// Route::get("/libri/{idLibro}", "App\Http\Controllers\ControllerLibri@showLibriPerAutore");



Route::resource("/autore", "App\Http\Controllers\ControllerAutore");
Route::resource("/libri", "App\Http\Controllers\ControllerLibri");


Route::get("/", "App\Http\Controllers\ControllerApplicazione@index");

 
