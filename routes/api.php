<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeliculaController;

Route::get('/peliculas', [PeliculaController::class, 'get']);
Route::get('/peliculas/{id}', [PeliculaController::class, 'getById']);
Route::post('/peliculas', [PeliculaController::class, 'create']);
Route::put('/peliculas/{id}', [PeliculaController::class, 'update']);
Route::delete('/peliculas/{id}', [PeliculaController::class, 'delete']);
