<?php

use App\Http\Controllers\MuseoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/museo/nuevo', [MuseoController::class,'view'])->name('nuevo.museo');
    Route::post('/museo/guardar', [MuseoController::class,'storeAll'])->name('guardar.museo');
    Route::get('/museo/eliminar', [MuseoController::class,'delete'])->name('eliminar.museo');
    Route::get('/museos', [MuseoController::class,'index'])->name('museos');
    //Route::resource('/museos', MuseoController::class);
});

require __DIR__.'/auth.php';
