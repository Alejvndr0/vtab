@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Gestión de Sección "Acerca de Nosotros"</h1>
   
    <a href="{{ route('home') }}" class="btn btn-secondary mb-3">Panel</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-striped">
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
                    <td>
                        @if($section->main_image)
                            <img src="{{ asset('storage/' . $section->main_image) }}" width="100" alt="">
                        @endif
                    </td>
                    <td>{{ $section->title }}</td>
                    <td>{{ Str::limit($section->description, 50) }}</td>
                    <td>{{ $section->is_active ? 'Sí' : 'No' }}</td>
                    <td>
                        <a href="{{ route('about-sections.edit', $section) }}" class="btn btn-sm btn-warning">Editar</a>
                        @if (auth()->user()->isAdmin())
                            <form action="{{ route('about-sections.destroy', $section) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
