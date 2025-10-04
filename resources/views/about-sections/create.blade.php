@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Sección "Acerca de Nosotros"</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('about-sections.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Ej.: Acerca de Nosotros">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Ej.: Somos una agencia especializada...">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="main_image" class="form-label">Imagen Principal</label>
            <input type="file" name="main_image" class="form-control" accept="image/jpeg,image/png,image/jpg" required>
            @error('main_image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image_1" class="form-label">Imagen Secundaria 1</label>
            <input type="file" name="image_1" class="form-control" accept="image/jpeg,image/png,image/jpg" required>
            @error('image_1')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image_2" class="form-label">Imagen Secundaria 2</label>
            <input type="file" name="image_2" class="form-control" accept="image/jpeg,image/png,image/jpg" required>
            @error('image_2')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="button_text" class="form-label">Texto del Botón</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text') }}" placeholder="Ej.: Nuestros Servicios">
            @error('button_text')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="button_link" class="form-label">Enlace del Botón</label>
            <input type="text" name="button_link" class="form-control" value="{{ old('button_link') }}" placeholder="Ej.: /service">
            @error('button_link')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Activo</label>
            <select name="is_active" class="form-select" required>
                <option value="1" {{ old('is_active', 1) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', 0) ? 'selected' : '' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('about-sections.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
