<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\MHomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;


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

Route::get('/', [PostController::class, 'home']);

Route::get('/about', [BiodataController::class, 'about']);

//Route::get('/about', [PostController::class, 'about']);

Route::get('/komen', [PostController::class, 'komen']);

Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'sregister']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'slogin']);
Route::post('/logout', [LoginController::class, 'logout']);
