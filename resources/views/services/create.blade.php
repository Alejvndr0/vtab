@extends('layouts.app')

@section('content')
    <h1>Crear Servicio</h1>
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="icon">Ícono</label>
            <select name="icon" id="icon" class="form-control" required>
                <option value="" disabled {{ old('icon') ? '' : 'selected' }}>Selecciona un ícono</option>
                <option value="fa fa-2x fa-ship" {{ old('icon') === 'fa fa-2x fa-ship' ? 'selected' : '' }}>Barco</option>
                <option value="fa fa-2x fa-plane" {{ old('icon') === 'fa fa-2x fa-plane' ? 'selected' : '' }}>Avión</option>
                <option value="fa fa-2x fa-globe" {{ old('icon') === 'fa fa-2x fa-globe' ? 'selected' : '' }}>Globo</option>
                <option value="fa fa-2x fa-hotel" {{ old('icon') === 'fa fa-2x fa-hotel' ? 'selected' : '' }}>Hotel</option>
                <option value="fa fa-2x fa-car" {{ old('icon') === 'fa fa-2x fa-car' ? 'selected' : '' }}>Coche</option>
                <option value="fa fa-2x fa-map" {{ old('icon') === 'fa fa-2x fa-map' ? 'selected' : '' }}>Mapa</option>
            </select>
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="mt-2">
                <label>Vista previa del ícono:</label>
                <i id="icon-preview" class="{{ old('icon', 'fa fa-2x fa-question') }}"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Ej.: CRUCEROS" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Ej.: Disfruta de experiencias inolvidables en altamar..." required>{{ old('description') }}</textarea>
            @error('description')
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
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>

    @section('scripts')
        <script>
            document.getElementById('icon').addEventListener('change', function() {
                const iconPreview = document.getElementById('icon-preview');
                iconPreview.className = this.value || 'fa fa-2x fa-question';
            });
        </script>
    @endsection
@endsection