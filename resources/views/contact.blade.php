@extends('layouts.inicio')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Contacto</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Contacto</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->



<!-- Booking End -->


<!-- Contact Start -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-4 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Contacto</h6>
            <h1 class="mb-4">Comunícate con Nosotros</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <p><i class="fa fa-map-marker-alt text-primary"></i> Dirección: Calle España Entre Mexico y Mayor Rocha, Cochabamba, Bolivia</p>
                <p><i class="fa fa-phone-alt text-primary"></i> Teléfono: <a href="" class="text-dark">+591 67510321</a></p>
                <p><i class="fa fa-phone-alt text-primary"></i> Teléfono: <a href="" class="text-dark">+591 69550344</a></p>
                <p><i class="fa fa-envelope text-primary"></i> Correo: <a href="mailto:correo@ejemplo.com" class="text-dark">correo@ejemplo.com</a></p>
                <p><i class="fa fa-clock text-primary"></i> Horario: Lunes a Viernes, 9:30 AM - 6:00 PM</p>
                <p><i class="fa fa-clock text-primary"></i>  Sabados, 9:30 AM - 2:00 PM</p>
            </div>
        </div>

        <div class="text-center mt-4">
            <h5 class="mb-3">Síguenos en nuestras redes sociales</h5>
            <div class="d-flex justify-content-center">
                <a class="btn btn-outline-primary btn-square mx-2" href="https://www.facebook.com/share/19rnfkxEiF/">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-primary btn-square mx-2" href="https://www.instagram.com/visastramitesyasesoriabolivia?igsh=cnptODdmYnNoOGl4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="btn btn-outline-primary btn-square mx-2" href="https://www.tiktok.com/@visas.tramites?_t=ZM-8tt05WArvG9&_r=1">
                    <i class="fab fa-tiktok"></i>
                </a>
               
            </div>
        </div>
    </div>
</div>

<!-- Contact End -->
@endsection