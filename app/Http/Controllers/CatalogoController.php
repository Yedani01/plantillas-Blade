<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use App\Models\pelicula;
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
         // Validación de los datos
        $validated = $request->validate([
    'titulo' => 'required|string|max:255',
    'descripcion' => 'required|string|max:255',
    'genero' => 'required|string|max:255',
    'director' => 'required|string|max:255|unique:usuarios',
    'fecha_estreno' => 'required|date|unique:usuarios',
], [
    'titulo.required' => 'Debes ingresar un título.',
    'descripcion.required' => 'Debes ingresar una descripción.',
    'genero.required' => 'Debes ingresar un género.',
    'director.required' => 'Debes ingresar un director.',
    'fecha_estreno.required' => 'Debes ingresar una fecha de estreno.',
   
]);

        Catalogo::create($request->all());

        return redirect()->route('listado');

        
    }

    public function editar($id) {
        $pelicula = Catalogo::findOrFail($id);
        return view('editar', compact('pelicula'));
    }

    // public function actualizar(Request $request, $id) {



        
    //     $pelicula = Catalogo::findOrFail($id);
    
    //     $pelicula->update($request->all());
    //     return redirect()->route('listado');

    // }









public function actualizar (Request $request, $id)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'genero' => 'required|string',
        'director' => 'required|string',
        'fecha_estreno' => 'required|date',
    ], [
     
        'titulo.required' => 'Debes colocar el título de la película.',
        'descripcion.required' => 'Debes colocar una descripción.',
        'genero.required' => 'Debes indicar el género.',
        'director.required' => 'Debes escribir el nombre del director.',
        'fecha_estreno.required' => 'Debes seleccionar una fecha de estreno.',
    ]);

     $pelicula = Catalogo::findOrFail($id);
    $pelicula->titulo = $request->input('titulo');
    $pelicula->descripcion = $request->input('descripcion');
    $pelicula->genero = $request->input('genero');
    $pelicula->director = $request->input('director');
    $pelicula->fecha_estreno = $request->input('fecha_estreno');
    $pelicula->save();
 $pelicula->update($request->all());
    return redirect()->route('listado')->with('success', 'Película actualizada correctamente.');
}






























    public function eliminar($id)
{
    $pelicula = Catalogo::findOrFail($id);
    $pelicula->delete();
    return redirect()->route('listado')->with('mensaje', 'Película eliminada correctamente');
}

public function registro() {
    if(session()->has('usuario_id')){
     return redirect()->route('inicio');
    }
    return view('login',["titulo "=>"registro"]);
   
}
public function login() {
    if(session()->has('usuario_id')){
     return redirect()->route('inicio');
    }
    return view('login',["titulo "=>"login"]);
   
}






}