<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function inicio() {
        return view('inicio');
    }

    public function listado() {
        $peliculas = Catalogo::all();
        return view('listado_peliculas', compact('peliculas'));
    }

    public function agregar() {
        return view('agregar');
    }

    public function guardar(Request $request) {
        Catalogo::create($request->all());
        return redirect()->route('listado');
    }

    public function editar($id) {
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    public function actualizar(Request $request, $id) {
        $pelicula = Catalogo::findOrFail($id);
        $pelicula->update($request->all());
        return redirect()->route('listado');
    }
    public function eliminar($id)
{
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();
    return redirect()->route('listado')->with('mensaje', 'Película eliminada correctamente');
}

}
