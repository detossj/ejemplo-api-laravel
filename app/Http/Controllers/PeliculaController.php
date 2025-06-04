<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    public function get() {
        $peliculas = Pelicula::all();
        return response()->json($peliculas);
    }

    public function getById($id) {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            return response()->json($pelicula);
        } 
        else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }

    public function create(Request $request) {
        $pelicula = Pelicula::create($request->all());
        return response()->json($pelicula, 201);
    }

    public function update(Request $request, $id) {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            $pelicula->update($request->all());
            return response()->json($pelicula);
        } 
        else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }

    public function delete($id) {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            $pelicula->delete();
            return response()->json(['message' => 'Pelicula eliminada']);
        } 
        else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }
}
