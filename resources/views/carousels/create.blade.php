@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Nuevo Carousel</h3>

    <form action="{{ route('carousels.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*" onchange="previewImage(event)">
            <img id="preview" class="mt-2 rounded shadow-sm" style="max-width: 250px; display:none;">
        </div>

        <div class="mb-3">
            <label>Título</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Subtítulo</label>
            <input type="text" name="subtitle" class="form-control">
        </div>

        <div class="mb-3">
            <label>Texto del botón</label>
            <input type="text" name="button_text" class="form-control">
        </div>

        <div class="mb-3">
            <label>Enlace del botón</label>
            <input type="text" name="button_link" class="form-control">
        </div>

        <div class="mb-3">
            <label>Orden</label>
            <input type="number" name="order" class="form-control" value="0">
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" name="is_active" class="form-check-input" value="1" checked>
            <label class="form-check-label">Activo</label>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
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
