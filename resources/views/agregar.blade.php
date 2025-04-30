@extends('layout')

@section('titulo', 'Agregar Película')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">


    <div class="container">
        <div class="form-container">
            <h2>Agregar Nueva Película</h2>
            <form action="{{ route('guardar') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input type="text" name="titulo" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción</label>
                    <textarea name="descripcion" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Género</label>
                    <input type="text" name="genero" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Director</label>
                    <input type="text" name="director" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Fecha de Estreno</label>
                    <input type="date" name="fecha_estreno" class="form-control" required>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-success me-2">🎬 Guardar</button>
                    <a href="{{ route('listado') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
