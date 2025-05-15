<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
  <div class="container">
  
    <!-- Menú -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase fw-semibold">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active text-primary' : '' }}" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('agregar') ? 'active text-primary' : '' }}" href="{{ route('agregar') }}">Agregar Película</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('listado') ? 'active text-primary' : '' }}" href="{{ route('listado') }}">Editar Película</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('login') ? 'active text-primary' : '' }}" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('registro') ? 'active text-primary' : '' }}" href="{{ route('registro') }}">Registro</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
