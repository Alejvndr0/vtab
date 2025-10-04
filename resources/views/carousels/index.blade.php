@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Carousels</h3>

    <a href="{{ route('carousels.create') }}" class="btn btn-primary mb-3">+ Nuevo Carousel</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>Subtítulo</th>
                <th>Activo</th>
                <th>Orden</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carousels as $carousel)
                <tr>
                    <td>
                        @if ($carousel->image_url)
                            <img src="{{ $carousel->image_url }}" alt="Imagen" width="120" class="rounded shadow-sm">
                        @else
                            <span class="text-muted">Sin imagen</span>
                        @endif
                    </td>
                    <td>{{ $carousel->title ?? '-' }}</td>
                    <td>{{ $carousel->subtitle ?? '-' }}</td>
                    <td>
                        @if ($carousel->is_active)
                            <span class="badge bg-success">Sí</span>
                        @else
                            <span class="badge bg-secondary">No</span>
                        @endif
                    </td>
                    <td>{{ $carousel->order }}</td>
                    <td>
                        <a href="{{ route('carousels.edit', $carousel) }}" class="btn btn-sm btn-warning">Editar</a>

                        <form action="{{ route('carousels.destroy', $carousel) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Seguro que deseas eliminar este carousel?')">
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
