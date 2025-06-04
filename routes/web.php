<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/peliculas', [PeliculaController::class,'get']);
Route::get('/api/peliculas/{$id}', [PeliculaController::class,'getById']);
Route::post('/api/peliculas', [PeliculaController::class,'create']);
Route::put('/api/peliculas/{$id}', [PeliculaController::class,'update']);
Route::delete('/api/peliculas/{$id}', [PeliculaController::class,'delete']);