@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Gestión de Paquetes</h1>

    <a href="{{ route('packages.create') }}" class="btn btn-primary mb-3">Crear Paquete</a>
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
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Activo</th>
                <th>Orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($packages as $package)
                <tr>
                    <td>
                        @if ($package->image)
                            <img src="{{ asset('storage/' . $package->image) }}" width="100" class="rounded shadow-sm" alt="{{ $package->name }}">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->location }}</td>
                    <td>{{ $package->price ? '$' . number_format($package->price, 2) : '-' }}</td>
                    <td>
                        @if ($package->is_active)
                            <span class="badge bg-success">Sí</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td>{{ $package->order }}</td>
                    <td>
                        <a href="{{ route('packages.edit', $package) }}" class="btn btn-sm btn-warning">Editar</a>

                        @if(auth()->user()->isAdmin())
                            <form action="{{ route('packages.destroy', $package) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este paquete?')">
                                    Eliminar
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

  
</div>
@endsection
