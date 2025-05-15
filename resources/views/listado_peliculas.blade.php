@extends('layout')

@section('titulo', 'Listado de Películas')

@section('contenido')

<div class="container content-container">
    <h2 class="mb-4">Listado de Películas</h2>

    {{-- Botón para agregar nueva película --}}
    <a href="{{ route('agregar') }}" class="btn btn-success mb-3">Agregar Nueva Película</a>

    {{-- Tabla de películas --}}
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
                        <a href="{{ route('editar', $pelicula->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <form action="{{ route('eliminar', $pelicula->id) }}" method="POST" class="d-inline formulario-eliminar">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- SweetAlert para mensajes de sesión --}}
@if (Auth::user())
<script>
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: 'sesion iniciada',
        confirmButtonColor: '#28a745',
        timer: 2000, 
        timerProgressBar: true,  
        willClose: () => {
      
        }
    });
</script>
@endif
<script src="{{ asset('js/listado.js') }}"></script>
@endsection
