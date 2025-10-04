@extends('layouts.app')

@section('content')
    <h1>Editar Carrusel</h1>
    <form action="{{ route('carousels.update', $carousel) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagen Actual</label>
            <div>
                <img src="{{ asset('storage/' . $carousel->image) }}" width="200" alt="Imagen Actual">
            </div>
            <label for="image">Nueva Imagen (dejar en blanco para mantener la actual)</label>
            <input type="file" name="image" class="form-control-file" accept="image/jpeg,image/png,image/jpg">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $carousel->title) }}" placeholder="Ej.: VISAS TRAMITES Y ASESORIA BOLIVIA">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $carousel->subtitle) }}" placeholder="Ej.: Descubramos el Mundo Juntos">
            @error('subtitle')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="button_text">Texto del Botón</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $carousel->button_text) }}" placeholder="Ej.: Nuestros Servicios">
            @error('button_text')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="button_link">Enlace del Botón</label>
            <input type="text" name="button_link" class="form-control" value="{{ old('button_link', $carousel->button_link) }}" placeholder="Ej.: /service">
            @error('button_link')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="is_active">Activo</label>
            <select name="is_active" class="form-control" required>
                <option value="1" {{ old('is_active', $carousel->is_active) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', $carousel->is_active) ? '' : 'selected' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="order">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $carousel->order) }}" min="0">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('carousels.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection