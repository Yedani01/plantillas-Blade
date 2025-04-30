
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
  

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <a class="navbar-brand d-flex align-items-center" href="{{ route('inicio') }}">
  <!-- Ícono SVG (puedes cambiarlo por otro SVG que te guste) -->
  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64" fill="none" class="me-2">
    <circle cx="32" cy="32" r="4" fill="#f7c873"/>
    <path d="M32 4V12M32 52V60M4 32H12M52 32H60M45 45L50 50M18 18L14 14M45 18L50 14M18 45L14 50" stroke="#f7c873" stroke-width="2" stroke-linecap="round"/>
  </svg>
  Disney
</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('agregar') }}">Agregar Película</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('listado') }}">Editar Película</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

