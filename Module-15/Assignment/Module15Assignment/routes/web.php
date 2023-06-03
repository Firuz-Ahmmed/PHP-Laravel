<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\postController;
use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

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


Route::get('/form',[formController::class,'index']);
Route::get('/welcome',[formController::class,'welcome'])->name('welcome');
Route::post('/form',[formController::class,'store'])->name('hello');
Route::get('/home',function(){
    return Redirect::to('/dashboard', 302);
});
Route::resource('products',ProductController::class);
Route::resource('posts',postController::class);
Route::get("/contact",ContactController::class);