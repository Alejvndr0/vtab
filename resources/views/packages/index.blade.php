@extends('layouts.app')

@section('content')
    <h1>Gestión de Paquetes</h1>
    <a href="{{ route('packages.create') }}" class="btn btn-primary mb-3">Crear Paquete</a>
    <table class="table">
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
                    <td><img src="{{ asset('storage/' . $package->image) }}" width="100" alt=""></td>
                    <td>{{ $package->name }}</td>
                    <td>{{ $package->location }}</td>
                    <td>{{ $package->price ? '$' . number_format($package->price, 2) : '-' }}</td>
                    <td>{{ $package->is_active ? 'Sí' : 'No' }}</td>
                    <td>{{ $package->order }}</td>
                    <td>
                        <a href="{{ route('packages.edit', $package) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('packages.destroy', $package) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection