<?php

use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;

// Public routes
Route::post('login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);

// Protected routes
Route::group(['middleware' => 'auth:api'], function () {
    Route::get('todos', [TodoController::class, 'index']);
    Route::post('todos', [TodoController::class, 'store']);
    Route::put('todos/{id}', [TodoController::class, 'update']);
    Route::delete('todos/{id}', [TodoController::class, 'destroy']);
});
