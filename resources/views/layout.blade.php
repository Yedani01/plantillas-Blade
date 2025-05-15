<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <script src="{{ asset('/js/app.js') }}"></script>
</head>
<body>
   
    <section class="v-100">
        @include('components/navbar')
        <div class="container mt-4">
            @yield('contenido')
        </div>
    </section>
</body>
</html>
