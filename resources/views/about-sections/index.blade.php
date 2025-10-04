@extends('layouts.app')

@section('content')
    <h1>Gestión de Sección "Acerca de Nosotros"</h1>
    <a href="{{ route('about-sections.create') }}" class="btn btn-primary mb-3">Crear Sección</a>
    <table class="table">
        <thead>
            <tr>
                <th>Imagen Principal</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Activo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($aboutSections as $section)
                <tr>
                    <td><img src="{{ asset('storage/' . $section->main_image) }}" width="100" alt=""></td>
                    <td>{{ $section->title }}</td>
                    <td>{{ Str::limit($section->description, 50) }}</td>
                    <td>{{ $section->is_active ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('about-sections.edit', $section) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('about-sections.destroy', $section) }}" method="POST" style="display:inline;">
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