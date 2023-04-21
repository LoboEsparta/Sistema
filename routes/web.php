<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadiouhfsController;
use App\Http\Controllers\RadiovhfsController;
use App\Http\Controllers\LoginsController;
use App\Http\Controllers\PersonalsController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\EditarController;


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
Route::get('/radiouhf', [App\Http\Controllers\RadiouhfsController::class, 'index'])->middleware('auth');




Route::get('/radiovhf', function () {
    return view('radiovhf');
});
Route::resource('radiovhf', RadiovhfsController::class)->middleware('auth');







Route::get('/principal', function () {
    return view('principal');
});
Route::get('/principal', [App\Http\Controllers\PersonalsController::class, 'ver'])->middleware('can:principal') ->name('principal');



Route::get('/personal', function () {
    return view('personal');
});
Route::resource('personal', PersonalsController::class)->middleware('auth');
Route::get('/personal', [App\Http\Controllers\PersonalsController::class, 'index'])->middleware('can:personal') ->name('personal');


Route::get('/editar', function () {
    return view('editar');
});
Route::resource('editar', EditarController::class)->middleware('auth');
Route::get('/editar', [App\Http\Controllers\EditarController::class, 'index'])->middleware('can:personal') ->name('personal');




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


