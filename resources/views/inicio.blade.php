@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <div class="container-fluid bg-light text-dark py-5" style="min-height: 100vh;">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-8 text-center p-5 bg-white rounded shadow">
                <h1 class="mb-4 display-4 fw-semibold text-primary">
                    ✨ Tu portal mágico al mundo del cine
                </h1>
                <p class="lead mb-4">
                    Sumérgete en un universo de historias fascinantes. Administra tus películas favoritas, descubre clásicos inolvidables y mantente al día con las últimas novedades.
                </p>
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="{{ route('listado') }}" class="btn btn-primary btn-lg px-4">
                        📚 Ver Catálogo
                    </a>
                    <a href="{{ route('agregar') }}" class="btn btn-success btn-lg px-4">
                        ➕ Añadir Película
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
