<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;



Route::get('/', [CarController::class, 'index']);
Route::get('/about', [CarController::class, 'about']);
Route::get('/shop', [CarController::class, 'shop']);
Route::get('/contact', [CarController::class, 'contact']);

Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);

