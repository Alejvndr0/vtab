<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
       <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->
    @vite([
        'resources/sass/app.scss',
        'resources/lib/owlcarousel/assets/owl.carousel.min.css',
        'resources/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'
    ])

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('carousels.index') }}">Carousels</a>
         
            <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>