<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Visas Trámites y Asesoría Bolivia' }}</title>

   <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
    
   @vite(['resources/js/main.js', 'resources/css/style.css'])


    <style>
        .topbar-login .dropdown-menu {
            background-color: #fff;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .topbar-login .dropdown-item:hover { background-color: #007bff; color: #fff; }
        .topbar-login .btn-login { background-color: #007bff; color: #fff; padding:5px 15px; border-radius:20px; font-size:14px; font-weight:500; }
        .topbar-login .btn-login:hover { background-color:#0056b3; }
        .topbar-login a { color: #007bff; font-weight:500; text-decoration:none; }
        .topbar-login a:hover { color:#0056b3; }
        .topbar-login .dropdown-toggle::after { border-top-color: #007bff; }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light pt-3 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a href=""><p><i class="fa fa-envelope mr-2"></i>info@example.com</p></a>
                        <p class="text-body px-3">|</p>
                        <a href=""><p><i class="fa fa-phone-alt mr-2"></i>+591 67510321</p></a>
                        <p class="text-body px-3">|</p>
                        <a href=""><p><i class="fa fa-phone-alt mr-2"></i>+591 69550344</p></a>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-primary px-3" href="https://www.facebook.com/share/19rnfkxEiF/"><i class="fab fa-facebook-f"></i></a>
                        <a class="text-primary px-3" href="https://www.instagram.com/visastramitesyasesoriabolivia?igsh=cnptODdmYnNoOGl4"><i class="fab fa-instagram"></i></a>
                        <a class="text-primary px-3" href="https://www.tiktok.com/@visas.tramites?_t=ZM-8tt05WArvG9&_r=1"><i class="fab fa-tiktok"></i></a>
                        <div class="topbar-login d-inline-flex align-items-center">
                            @if (Route::has('login'))
                                @auth
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fas fa-user mr-2"></i>{{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="{{ url('/home') }}" class="dropdown-item">Home</a>
                                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="mr-3">Iniciar Sesión</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('img/log.png') }}" alt="Logo" height="90">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav py-0">
                        <a href="{{ url('/') }}" class="nav-item nav-link active">INICIO</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">ACERCA DE</a>
                        <a href="{{ url('/service') }}" class="nav-item nav-link">SERVICIOS</a>
                        <a href="{{ url('/package') }}" class="nav-item nav-link">PAQUETES TURISTICOS</a>
                        <a href="{{ route('visa') }}" class="nav-item nav-link">VISA A BOLIVIA</a>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">CONTACTO</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Content Section -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white"> </span></h1>
                </a>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 8px;">SIGUENOS</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.facebook.com/share/19rnfkxEiF/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="https://www.instagram.com/visastramitesyasesoriabolivia?igsh=cnptODdmYnNoOGl4"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="https://www.tiktok.com/@visas.tramites?_t=ZM-8tt05WArvG9&_r=1"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contáctanos</h5>
                <p><i class="fa fa-map-marker-alt mr-2"></i>CALLE ESPAÑA ENTRE MEXICO Y MAYOR ROCHA, COCHABAMBA, BOLIVIA</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+591 67510321</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+591 69550344</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            </div>
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('img/logf.png') }}" alt="Logo" height="350">
            </a>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p>VISAS TRAMITES ASESORIA BOLIVIA 2025</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


       <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.43/moment-timezone-with-data.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Tu JS -->
   

    <script>
        // Inicializar datetimepicker si lo usas
        $(function () {
            $('#datetimepicker1').datetimepicker({
                format: 'L'
            });
        });
    </script>
</body>
</html>