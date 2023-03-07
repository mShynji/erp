<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!*/

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;

Route::get('/', [MainController::class, 'index']);

Route::get('/user/new', [UserController::class, 'cadastro']);
Route::post('/user/new', [UserController::class, 'store']);
Route::get('/user/login', [UserController::class, 'login']);