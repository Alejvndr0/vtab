@extends('layouts.inicio')

@section('content')
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


<!-- Destination Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destinos</h6>
            <h1>EXPLORA LOS MEJORES DESTINOS</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-1.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United States</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-2.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">United Kingdom</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-3.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Australia</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-4.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">India</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-5.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">South Africa</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="destination-item position-relative overflow-hidden mb-2">
                    <img class="img-fluid" src="img/destination-6.jpg" alt="">
                    <a class="destination-overlay text-white text-decoration-none" href="">
                        <h5 class="text-white">Indonesia</h5>
                        <span>100 Cities</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Destination Start -->
@endsection