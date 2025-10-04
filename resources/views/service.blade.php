@extends('layouts.inicio')

@section('content')
<!-- Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">SERVICIOS</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Servicios</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->



<!-- Booking End -->


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


@endsection