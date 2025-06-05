<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{

    /**
     * Se obtienen todas las peliculas
     * @return \Illuminate\Http\JsonResponse
     */
    public function get()
    {
        $peliculas = Pelicula::all();
        return response()->json($peliculas);
    }

    /**
     * Se obtiene una pelicula por su id
     * @param int id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById($id)
    {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            return response()->json($pelicula);
        } else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }

    /**
     * @bodyParam anio int
     * @bodyParam sinopsis string
     * @bodyParam titulo string
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        $pelicula = Pelicula::create($request->all());
        return response()->json($pelicula, 201);
    }

    /**
     * Se actualiza una pelicula
     * @bodyParam anio int
     * @bodyParam sinopsis string
     * @bodyParam titulo string
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            $pelicula->update($request->all());
            return response()->json($pelicula);
        } else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }

    /**
     * Se elimina una pelicula
     * @param int id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        $pelicula = Pelicula::find($id);
        if ($pelicula) {
            $pelicula->delete();
            return response()->json(['message' => 'Pelicula eliminada']);
        } else {
            return response()->json(['message' => 'Pelicula no encontrada'], 404);
        }
    }
}
