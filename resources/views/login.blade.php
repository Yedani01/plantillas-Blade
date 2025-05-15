@extends('layout')

@section('titulo', 'Login')

@section('contenido')


<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="card shadow-lg p-4" style="max-width: 500px; width: 100%; border-radius: 1rem;">
        <div class="text-center mb-4">
            <img src="{{ asset('img/login.jpg') }}" alt="Barbie" class="img-fluid rounded shadow"
                style="max-height: 200px;">
        </div>

 @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="text-center mb-4 text-primary">Iniciar Sesión</h2>

        <form id="form" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-group mb-3">
                <label for="in_usuario"><i class="bi bi-person-circle"></i> Usuario</label>
                <input type="text" id="in_usuario" name="usuario" class="form-control" placeholder="Ingresa tu usuario">
            </div>

            <div class="form-group mb-4">
                <label for="in_password"><i class="bi bi-key-fill"></i> Contraseña</label>
                <input type="password" id="in_password" name="password" class="form-control"
                    placeholder="Ingresa tu contraseña">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <a href="{{ route('registro') }}" class="btn btn-outline-secondary">¿Registrar?</a>

            </div>


        </form>

    </div>
</div>



@endsection