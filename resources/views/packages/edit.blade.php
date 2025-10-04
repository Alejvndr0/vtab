@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Paquete</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('packages.update', $package) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Imagen Actual</label>
            <div class="mb-2">
                <img src="{{ asset('storage/' . $package->image) }}" width="200" alt="Imagen Actual">
            </div>
            <label class="form-label">Nueva Imagen (dejar en blanco para mantener la actual)</label>
            <input type="file" name="image" class="form-control" accept="image/jpeg,image/png,image/jpg">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Nombre del Paquete</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $package->name) }}" placeholder="Ej.: Aventura en París" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Ubicación</label>
            <input type="text" name="location" class="form-control" value="{{ old('location', $package->location) }}" placeholder="Ej.: Paris, Francia">
            @error('location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Duración</label>
            <input type="text" name="duration" class="form-control" value="{{ old('duration', $package->duration) }}" placeholder="Ej.: 7 días">
            @error('duration')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Personas</label>
            <input type="text" name="persons" class="form-control" value="{{ old('persons', $package->persons) }}" placeholder="Ej.: 2 personas">
            @error('persons')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Calificación (0 a 5)</label>
            <input type="number" name="rating" class="form-control" value="{{ old('rating', $package->rating) }}" step="0.1" min="0" max="5" placeholder="Ej.: 4.5">
            @error('rating')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Número de Reseñas</label>
            <input type="number" name="reviews" class="form-control" value="{{ old('reviews', $package->reviews) }}" min="0" placeholder="Ej.: 250">
            @error('reviews')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $package->price) }}" step="0.01" min="0" placeholder="Ej.: 350.00">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Activo</label>
            <select name="is_active" class="form-control" required>
                <option value="1" {{ old('is_active', $package->is_active) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', $package->is_active) ? '' : 'selected' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $package->order) }}" min="0">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
