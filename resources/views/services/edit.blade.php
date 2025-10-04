@extends('layouts.app')

@section('content')
    <h1>Editar Servicio</h1>
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="icon">Ícono (Clase de Font Awesome)</label>
            <input type="text" name="icon" class="form-control" value="{{ old('icon', $service->icon) }}" placeholder="Ej.: fa fa-2x fa-ship">
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" placeholder="Ej.: CRUCEROS" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Ej.: Disfruta de experiencias inolvidables en altamar..." required>{{ old('description', $service->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="is_active">Activo</label>
            <select name="is_active" class="form-control" required>
                <option value="1" {{ old('is_active', $service->is_active) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', $service->is_active) ? '' : 'selected' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="order">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $service->order) }}" min="0">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection