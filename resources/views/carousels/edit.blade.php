@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Editar Carousel</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('carousels.update', $carousel) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*" onchange="previewImage(event)">
            @if ($carousel->image_url)
                <img id="preview" src="{{ $carousel->image_url }}" class="mt-2 rounded shadow-sm" style="max-width: 250px;">
            @else
                <img id="preview" class="mt-2 rounded shadow-sm" style="max-width: 250px; display:none;">
            @endif
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $carousel->title) }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Subtítulo</label>
            <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle', $carousel->subtitle) }}">
            @error('subtitle')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Texto del botón</label>
            <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $carousel->button_text) }}">
            @error('button_text')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Enlace del botón</label>
            <input type="text" name="button_link" class="form-control" value="{{ old('button_link', $carousel->button_link) }}">
            @error('button_link')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Orden</label>
            <input type="number" name="order" class="form-control" value="{{ old('order', $carousel->order) }}">
            @error('order')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" value="1" {{ old('is_active', $carousel->is_active) ? 'checked' : '' }}>
            <label class="form-check-label">Activo</label>
            @error('is_active')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('carousels.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
