<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadiouhfsController;
use App\Http\Controllers\LoginsController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});



Route::get('/radiouhf', function () {
    return view('radiouhf');
});
Route::resource('radiouhf', RadiouhfsController::class);



Route::get('/radiovhf', function () {
    return view('radiovhf');
});



Route::get('/vista', function () {
    return view('vista');
});
Route::resource('vista', LoginsController::class);



Route::get('/estructura', function () {
    return view('estructura');
});
Route::resource('estructura', LoginsController::class);