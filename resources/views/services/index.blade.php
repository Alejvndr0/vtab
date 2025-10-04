@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestión de Servicios</h1>

    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Crear Servicio</a>
<a href="{{ route('home') }}" class="btn btn-secondary mb-3">Panel</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-striped table-bordered align-middle">
        <thead>
            <tr>
                <th>Ícono</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Activo</th>
                <th>Orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td><i class="{{ $service->icon }}"></i></td>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td>
                    <td>
                        @if ($service->is_active)
                            <span class="badge bg-success">Sí</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td>{{ $service->order }}</td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro que deseas eliminar este servicio?')">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
