@extends('layouts.app')

@section('content')
    <h1>Gestión de Servicios</h1>
    <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Crear Servicio</a>
    <table class="table">
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
                    <td>{{ $service->is_active ? 'Sí' : 'No' }}</td>
                    <td>{{ $service->order }}</td>
                    <td>
                        <a href="{{ route('services.edit', $service) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
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