<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\module14;
use Illuminate\Support\Facades\Route;

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

// Route::get('/',[FormController::class,'index']);
// Route::post('/submit', [FormController::class,'store'])->name('submit.form');

// Route::post('/hello',[DemoController::class,'Demo']);
//Question 01 & 02 api 
Route::get("/form",[module14::class,'inputPage']);

Route::post('/form', [module14::class,'inputPageStore'])->name('indexPage.submit');
Route::get('/json', [module14::class,'json']);
//Question 04 api
Route::post('/jsonResponse', [module14::class,'jsonResponse']);
//Question 05 api
Route::post('/file', [module14::class,'fileUpload']);
//Question 06 api
Route::get('/cookie', [module14::class,'requestCookie']);
//Question 07 api
Route::post('/submit',[module14::class,'submitEmail']);
