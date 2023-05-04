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

use App\Http\Controllers\MainController;
Route::get('/', [ MainController::class, 'home']);
Route::get('/about', [ MainController::class, 'about']);
Route::get('/chk', [ MainController::class, 'chk']);


use App\Http\Controllers\RegiController;
Route::get('/regi', [ RegiController::class, 'regi']);
Route::get('/check', [ RegiController::class, 'check']);
Route::get('/lk', [ RegiController::class, 'lk']);
Route::get('/change', [ RegiController::class, 'change']);

use App\Http\Controllers\AuthoController;
Route::get('/autho', [ AuthoController::class, 'autho']);
Route::get('/auth', [ AuthoController::class, 'auth']);
Route::get('/exit', [ AuthoController::class, 'exit']);
