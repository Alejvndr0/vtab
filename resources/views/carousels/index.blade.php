@extends('layouts.app')

@section('content')
    <h1>Gestión de Carousels</h1>
    <a href="{{ route('carousels.create') }}" class="btn btn-primary mb-3">Crear Carousel</a>
    <table class="table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carousels as $carousel)
                <tr>
                    <td><img src="{{ asset('storage/' . $carousel->image) }}" width="100" alt=""></td>
                    <td>{{ $carousel->title }}</td>
                    <td>{{ $carousel->subtitle }}</td>
                    <td>
                        <a href="{{ route('carousels.edit', $carousel) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('carousels.destroy', $carousel) }}" method="POST" style="display:inline;">
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