@extends('layouts.inicio')

@section('content')
 <!-- Header Start -->
 <div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">SOBRE NOSOTROS</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">sobre nosotros</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->



<!-- Booking End -->


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


@endsection