@extends('layouts.app')

@section('content')
    <h1>Crear Paquete</h1>
    <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" name="image" class="form-control-file" accept="image/jpeg,image/png,image/jpg" required>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Nombre del Paquete</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Ej.: Aventura en París" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="location">Ubicación</label>
            <input type="text" name="location" class="form-control" value="{{ old('location') }}" placeholder="Ej.: Paris, Francia">
            @error('location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="duration">Duración</label>
            <input type="text" name="duration" class="form-control" value="{{ old('duration') }}" placeholder="Ej.: 7 días">
            @error('duration')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="persons">Personas</label>
            <input type="text" name="persons" class="form-control" value="{{ old('persons') }}" placeholder="Ej.: 2 personas">
            @error('persons')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="rating">Calificación (0 a 5)</label>
            <input type="number" name="rating" class="form-control" value="{{ old('rating') }}" step="0.1" min="0" max="5" placeholder="Ej.: 4.5">
            @error('rating')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="reviews">Número de Reseñas</label>
            <input type="number" name="reviews" class="form-control" value="{{ old('reviews') }}" min="0" placeholder="Ej.: 250">
            @error('reviews')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Precio</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}" step="0.01" min="0" placeholder="Ej.: 350.00">
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="is_active">Activo</label>
            <select name="is_active" class="form-control" required>
                <option value="1" {{ old('is_active', 1) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', 0) ? 'selected' : '' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="order">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', 0) }}" min="0">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection