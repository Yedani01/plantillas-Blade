@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')


<div class="d-flex">
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-outline-danger">
            <i class="bi bi-box-arrow-right"></i> cerrar sesión
        </button>
    </form>
</div>

<div class="row mt-4">
    
    <div class="col-4">
         <img src="{{ asset('img/monaa.jpeg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>

    <div class="col-4">
        <img src="{{ asset('img/jaja.jpg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>

    <div class="col-4">
         <img src="{{ asset('img/monaa.jpeg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>

    
    <div class="col-4  mt-4">
        <img src="{{ asset('img/monaa.jpeg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>
    <div class="col-4 mt-4">
         <img src="{{ asset('img/monaa.jpeg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>
    <div class="col-4  mt-4">
        <img src="{{ asset('img/monaa.jpeg') }}" alt="Barbie" class="img-fluid rounded shadow" style="max-height: 200px;">
    </div>
    
    
</div>


</div>
</div>
</div>



@endsection