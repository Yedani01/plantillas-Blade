@extends('layout')

@section('titulo', 'Listado de Películas')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
    

    <div class="container content-container">
        <h2 class="mb-4">Listado de Películas</h2>

        {{-- Mensaje de éxito --}}
        @if(session('mensaje'))
            <div class="alert alert-success text-center">
                {{ session('mensaje') }}
            </div>
        @endif

        <a href="{{ route('agregar') }}" class="btn btn-success mb-3">Agregar Nueva Película</a>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Director</th>
                    <th>Fecha de Estreno</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peliculas as $pelicula)
                    <tr>
                        <td>{{ $pelicula->titulo }}</td>
                        <td>{{ $pelicula->genero }}</td>
                        <td>{{ $pelicula->director }}</td>
                        <td>{{ $pelicula->fecha_estreno }}</td>
                        <td>
                            <a href="{{ route('editar', $pelicula->id) }}" class="btn btn-warning btn-sm"> Editar</a>

                            <form action="{{ route('eliminar', $pelicula->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta película?');" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"> Eliminar</button>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
