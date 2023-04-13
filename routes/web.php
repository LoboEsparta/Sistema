<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadiouhfsController;
use App\Http\Controllers\RadiovhfsController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\Auth\RegisteredUserController;


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


Route::get('/login', function () {
    return view('login');
});


Route::get('/radiouhf', function () {
    return view('radiouhf')->middleware('auth');
});
Route::resource('radiouhf', RadiouhfsController::class)->middleware('auth');



Route::get('/radiovhf', function () {
    return view('radiovhf');
});
Route::resource('radiovhf', RadiovhfsController::class)->middleware('auth');







Route::get('/principal', function () {
    return view('principal');
});
Route::get('/principal', [App\Http\Controllers\PersonalController::class, 'create'])->middleware('can:principal') ->name('principal');



Route::get('/personal', function () {
    return view('personal');
});
Route::resource('personal', PersonalController::class)->middleware('auth');
Route::get('/personal', [App\Http\Controllers\PersonalController::class, 'index'])->middleware('can:personal') ->name('personal');


Route::get('/vista', function () {
    return view('vista');
});
Route::resource('vista', LoginsController::class)->middleware('auth');
Route::get('/vista', [App\Http\Controllers\LoginsController::class, 'index'])->middleware('can:vista') ->name('vista');






Route::get('/estructura', function () {
    return view('estructura');
});
Route::resource('estructura', LoginsController::class)->middleware('auth');



Route::view('/registro', 'auth.register')->name('register')->middleware('can:registro');;
Route::post('/registro', [RegisteredUserController::class, 'store'])->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


