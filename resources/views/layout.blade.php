<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
