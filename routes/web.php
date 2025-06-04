<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/peliculas', [PeliculasController::class,'get']);
Route::get('/api/peliculas/{$id}', [PeliculasController::class,'getById']);
Route::post('/api/peliculas', [PeliculasController::class,'create']);
Route::put('/api/peliculas/{$id}', [PeliculasController::class,'update']);
Route::update('/api/peliculas/{$id}', [PeliculasController::class,'delete']);