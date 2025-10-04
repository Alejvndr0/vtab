@extends('layouts.inicio')

@section('content')
   <!-- Carousel Start -->
<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($carousels as $index => $carousel)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <img src="{{ $carousel->image_url }}" class="d-block w-100" alt="Imagen del carrusel">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $carousel->title }}</h5>
                    <p>{{ $carousel->description }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<!-- Carousel End -->

    <!-- Carousel End -->

   @php
    $aboutSection = App\Models\AboutSection::where('is_active', true)->first();
@endphp

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    @if ($aboutSection && $aboutSection->main_image)
                        <img class="position-absolute w-100 h-100" src="{{ asset('storage/' . $aboutSection->main_image) }}" style="object-fit: cover;" alt="Imagen Principal">
                    @else
                        <img class="position-absolute w-100 h-100" src="{{ asset('img/about.jpg') }}" style="object-fit: cover;" alt="Imagen por Defecto">
                    @endif
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">
                        {{ $aboutSection->title ?? 'Acerca de Nosotros' }}
                    </h6>
                    <h1 class="mb-3">
                        {{ $aboutSection->description ?? 'Somos una agencia especializada en trámites de visa y asesoría legal. Con años de experiencia, ayudamos a nuestros clientes a cumplir sus sueños de viajar al extranjero de manera segura y eficiente.' }}
                    </h1>
                    <div class="row mb-4">
                        <div class="col-6">
                            @if ($aboutSection && $aboutSection->image_1)
                                <img class="img-fluid" src="{{ asset('storage/' . $aboutSection->image_1) }}" alt="Imagen Secundaria 1">
                            @else
                                <img class="img-fluid" src="{{ asset('img/about-1.jpg') }}" alt="Imagen Secundaria 1 por Defecto">
                            @endif
                        </div>
                        <div class="col-6">
                            @if ($aboutSection && $aboutSection->image_2)
                                <img class="img-fluid" src="{{ asset('storage/' . $aboutSection->image_2) }}" alt="Imagen Secundaria 2">
                            @else
                                <img class="img-fluid" src="{{ asset('img/about-2.jpg') }}" alt="Imagen Secundaria 2 por Defecto">
                            @endif
                        </div>
                    </div>
                    <a href="{{ $aboutSection->button_link ?? url('/service') }}" class="btn btn-primary mt-1">
                        {{ $aboutSection->button_text ?? 'Nuestros Servicios' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Precios Competitivos</h5>
                            <p class="m-0">Ofrecemos las mejores tarifas del mercado sin comprometer la calidad de nuestros productos y servicios. Brindamos soluciones accesibles para todo tipo de clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Mejores Servicios</h5>
                            <p class="m-0">Nos destacamos por brindar un servicio excepcional, con atención personalizada y soluciones adaptadas a tus necesidades. La satisfacción de nuestros clientes es nuestra prioridad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-user-shield text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="mb-2">Seguridad Garantizada</h5>
                            <p class="m-0">Protegemos tus datos y transacciones con los más altos estándares de seguridad, garantizando confianza y tranquilidad en cada operación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinos</h6>
                <h1>Explora los Mejores Destinos</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-1.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United States</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-2.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">United Kingdom</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-3.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Australia</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-4.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">India</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-5.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">South Africa</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{ asset('img/destination-6.jpg') }}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">Indonesia</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->

   @php
    $services = App\Models\Service::where('is_active', true)->orderBy('order')->get();
@endphp

<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Servicios</h6>
            <h1>NUESTROS SERVICIOS</h1>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="{{ $service->icon }} mx-auto mb-4"></i>
                        <h5 class="mb-2">{{ $service->title }}</h5>
                        <p class="m-0">{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
            @if ($services->isEmpty())
                <div class="col-12 text-center">
                    <p>No hay servicios disponibles.</p>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Service End -->

    @php
    $packages = App\Models\Package::where('is_active', true)->orderBy('order')->get();
@endphp

<!-- Packages Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Paquetes</h6>
            <h1>Paquetes Turísticos Perfectos</h1>
        </div>
        <div class="row">
            @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>{{ $package->location ?? 'Sin ubicación' }}</small>
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{ $package->duration ?? 'Sin duración' }}</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{ $package->persons ?? 'Sin especificar' }}</small>
                            </div>
                            <a class="h5 text-decoration-none" href="">{{ $package->name ?? 'Nombre del paquete' }}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>{{ $package->rating ?? '0' }} <small>({{ $package->reviews ?? '0' }})</small></h6>
                                    <h5 class="m-0">${{ $package->price ? number_format($package->price, 2) : '0.00' }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @if ($packages->isEmpty())
                <div class="col-12 text-center">
                    <p>No hay paquetes disponibles.</p>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Packages End -->
@endsection