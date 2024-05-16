<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/cars', [CarController::class, 'index']);
Route::get('/contact', [IndexController::class, 'contact']);

//CARS SECTION
Route::prefix('cars')->group(function () {
    Route::get('/', [CarController::class, 'index'])->name('cars');
    Route::get('/create', [CarController::class, 'create'])->name('cars.create'); 
    Route::post('/store', [CarController::class, 'store'])->name('cars.store'); 
    Route::get('/{id}', [CarController::class, 'show'])->name('cars.show'); 
    Route::get('/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::patch('/{id}', [CarController::class, 'update'])->name('cars.update'); 
    Route::delete('/{id}', [CarController::class, 'destroy'])->name('cars.delete'); 
    });
   
//USERS SECTION
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/create', [UserController::class, 'create']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::patch('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

//LOGIN SESSION SECTION
Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);