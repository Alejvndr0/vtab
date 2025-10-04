@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Servicio</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="icon" class="form-label">Ícono</label>
            <select name="icon" id="icon" class="form-select" required>
                <option value="" disabled {{ old('icon', $service->icon) ? '' : 'selected' }}>Selecciona un ícono</option>
                <option value="fa fa-2x fa-ship" {{ old('icon', $service->icon) === 'fa fa-2x fa-ship' ? 'selected' : '' }}>Barco</option>
                <option value="fa fa-2x fa-plane" {{ old('icon', $service->icon) === 'fa fa-2x fa-plane' ? 'selected' : '' }}>Avión</option>
                <option value="fa fa-2x fa-globe" {{ old('icon', $service->icon) === 'fa fa-2x fa-globe' ? 'selected' : '' }}>Globo</option>
                <option value="fa fa-2x fa-hotel" {{ old('icon', $service->icon) === 'fa fa-2x fa-hotel' ? 'selected' : '' }}>Hotel</option>
                <option value="fa fa-2x fa-car" {{ old('icon', $service->icon) === 'fa fa-2x fa-car' ? 'selected' : '' }}>Coche</option>
                <option value="fa fa-2x fa-map" {{ old('icon', $service->icon) === 'fa fa-2x fa-map' ? 'selected' : '' }}>Mapa</option>
            </select>
            @error('icon')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div class="mt-2">
                <label>Vista previa del ícono:</label>
                <i id="icon-preview" class="{{ old('icon', $service->icon ?? 'fa fa-2x fa-question') }}"></i>
            </div>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $service->title) }}" placeholder="Ej.: CRUCEROS" required>
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Ej.: Disfruta de experiencias inolvidables en altamar..." required>{{ old('description', $service->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="is_active" class="form-label">Activo</label>
            <select name="is_active" class="form-select" required>
                <option value="1" {{ old('is_active', $service->is_active) ? 'selected' : '' }}>Sí</option>
                <option value="0" {{ old('is_active', $service->is_active) ? '' : 'selected' }}>No</option>
            </select>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="order" class="form-label">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $service->order) }}" min="0">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('icon').addEventListener('change', function() {
        const iconPreview = document.getElementById('icon-preview');
        iconPreview.className = this.value || 'fa fa-2x fa-question';
    });
</script>
@endsection
