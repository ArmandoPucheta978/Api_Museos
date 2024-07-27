<?php

use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\MuseoController;
use App\Http\Controllers\TiposController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/museos',[MuseoController::class, "list"]);
Route::post('/museo',[MuseoController::class, ""]);
Route::post('/museos/nuevo',[MuseoController::class, "storeAPI"]);
Route::get('/museo/guardar',[MuseoController::class, "storeAPI"]);
Route::get('/museos/eliminar',[MuseoController::class, "deleteAPI"]);
Route::get('/tipos',[TiposController::class, "list"]);
Route::post('/tipos/nuevo',[TiposController::class, "storeAPI"]);
Route::get('/tipos/eliminar',[TiposController::class, "deleteAPI"]);
Route::post('/calificacion/guardar',[CalificacionController::class, "storeAPI"]);