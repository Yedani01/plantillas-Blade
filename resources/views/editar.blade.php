@extends('layout')

@section('titulo', 'Editar Película')

@section('contenido')
<!-- Enlace al archivo CSS principal -->
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<!-- Fondo de partículas -->
<div id="particles-js" style="position: fixed; width: 100%; height: 100%; z-index: -1;"></div>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="form-container p-5 rounded-4 shadow-lg text-white w-100" style="max-width: 600px; background: rgba(17, 24, 39, 0.85); border: 1px solid #00f2ff; box-shadow: 0 0 20px #00f2ff;">

        <h2 class="text-center mb-4" style="text-shadow: 0 0 5px #00f2ff;">✏️ Editar Película</h2>

        <form action="{{ route('actualizar', $pelicula->id) }}" method="POST">
            @csrf

            <!-- Mostrar errores de validación -->
            @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Campo: Título -->
            <div class="mb-3">
                <label class="form-label">🎬 Título</label>
                <input 
                    type="text" 
                    name="titulo" 
                    value="{{ old('titulo', $pelicula->titulo) }}" 
                    class="form-control bg-dark text-white border-info" >
            </div>

            <!-- Campo: Descripción -->
            <div class="mb-3">
                <label class="form-label">📝 Descripción</label>
                <textarea 
                    name="descripcion" 
                    class="form-control bg-dark text-white border-info" rows="3" >{{ old('descripcion', $pelicula->descripcion) }}</textarea>
            </div>

            <!-- Campo: Género -->
            <div class="mb-3">
                <label class="form-label">🎭 Género</label>
                <input 
                    type="text" 
                    name="genero" 
                    value="{{ old('genero', $pelicula->genero) }}" 
                    class="form-control bg-dark text-white border-info" >
            </div>

            <!-- Campo: Director -->
            <div class="mb-3">
                <label class="form-label">🎬 Director</label>
                <input 
                    type="text" 
                    name="director" 
                    value="{{ old('director', $pelicula->director) }}" 
                    class="form-control bg-dark text-white border-info" >
            </div>

            <!-- Campo: Fecha de estreno -->
            <div class="mb-3">
                <label class="form-label">📅 Fecha de Estreno</label>
                <input 
                    type="date" 
                    name="fecha_estreno" 
                    value="{{ old('fecha_estreno', $pelicula->fecha_estreno) }}" 
                    class="form-control bg-dark text-white border-info" >
            </div>

            <!-- Botones de acción -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-neon me-2">💾 Actualizar</button>
                <a href="{{ route('listado') }}" class="btn btn-outline-light">Cancelar</a>
            </div>
        </form>
    </div>
</div>


@endsection
