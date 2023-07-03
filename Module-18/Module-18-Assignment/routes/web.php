<?php

use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
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

Route::get('/posts',[postController::class,'allPost']);
Route::delete('/posts/{id}/delete', [PostController::class, 'destroy']);
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPostsByCategory']);
