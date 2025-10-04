@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">{{ __('Panel de Control') }}</h4>
                    <span class="badge bg-light text-dark">Panel de: {{ auth()->user()->name }}</span>
                </div>

                <div class="card-body">
                    {{-- Mensajes --}}
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="alert alert-info">
                        ¡Bienvenid@, {{ auth()->user()->name }}!
                    </div>

                    {{-- Panel ADMIN --}}
                    @if (auth()->user()->isAdmin())
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Clientes</h5>
                                        <p class="card-text">Administra la información de tus clientes.</p>
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary">Ir a Clientes</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Usuarios</h5>
                                        <p class="card-text">Crea y gestiona empleados de la agencia.</p>
                                        <a href="{{ route('users.index') }}" class="btn btn-success">Ir a Usuarios</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Carrusel</h5>
                                        <p class="card-text">Administra la información de tu carrusel.</p>
                                        <a href="{{ route('carousels.index') }}" class="btn btn-primary">Ir a Carrusel</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Sección Nosotros</h5>
                                        <p class="card-text">Administra la información de la sección Nosotros.</p>
                                        <a href="{{ route('about-sections.index') }}" class="btn btn-primary">Ir a Nosotros</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Servicios</h5>
                                        <p class="card-text">Administra tus servicios.</p>
                                        <a href="{{ route('services.index') }}" class="btn btn-primary">Ir a Servicios</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Paquetes</h5>
                                        <p class="card-text">Administra tus paquetes.</p>
                                        <a href="{{ route('packages.index') }}" class="btn btn-primary">Ir a Paquetes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                      @if (auth()->user()->isEditor())
                        <div class="row">
                           

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Carrusel</h5>
                                        <p class="card-text">Administra la información de tu carrusel.</p>
                                        <a href="{{ route('carousels.index') }}" class="btn btn-primary">Ir a Carrusel</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Sección Nosotros</h5>
                                        <p class="card-text">Administra la información de la sección Nosotros.</p>
                                        <a href="{{ route('about-sections.index') }}" class="btn btn-primary">Ir a Nosotros</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Servicios</h5>
                                        <p class="card-text">Administra tus servicios.</p>
                                        <a href="{{ route('services.index') }}" class="btn btn-primary">Ir a Servicios</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Paquetes</h5>
                                        <p class="card-text">Administra tus paquetes.</p>
                                        <a href="{{ route('packages.index') }}" class="btn btn-primary">Ir a Paquetes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Panel JEFE --}}
                    @if (auth()->user()->isjefe())
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Clientes</h5>
                                        <p class="card-text">Administra la información de tus clientes.</p>
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary">Ir a Clientes</a>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Carrusel</h5>
                                        <p class="card-text">Administra la información de tu carrusel.</p>
                                        <a href="{{ route('carousels.index') }}" class="btn btn-primary">Ir a Carrusel</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Sección Nosotros</h5>
                                        <p class="card-text">Administra la información de la sección Nosotros.</p>
                                        <a href="{{ route('about-sections.index') }}" class="btn btn-primary">Ir a Nosotros</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Servicios</h5>
                                        <p class="card-text">Administra tus servicios.</p>
                                        <a href="{{ route('services.index') }}" class="btn btn-primary">Ir a Servicios</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Paquetes</h5>
                                        <p class="card-text">Administra tus paquetes.</p>
                                        <a href="{{ route('packages.index') }}" class="btn btn-primary">Ir a Paquetes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    {{-- Panel EMPLEADO --}}
                    @if (auth()->user()->role === 'employee')
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="card text-center h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Clientes</h5>
                                        <p class="card-text">Administra la información de tus clientes.</p>
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary">Ir a Clientes</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
