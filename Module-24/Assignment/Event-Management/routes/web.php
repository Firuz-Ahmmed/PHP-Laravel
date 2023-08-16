<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes (assuming you've generated auth routes)
Auth::routes();

// Events CRUD routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

// RSVP route
Route::get('/events/{event}/rsvp', [EventController::class, 'rsvp'])->name('events.rsvp');

// Search route
Route::get('/events/search', [EventController::class, 'search'])->name('events.search');


Route::get('/', function () {
    return ['Laravel' => app()->version()];
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
