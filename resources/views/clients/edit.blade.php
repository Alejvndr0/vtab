@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form action="{{ route('clients.update', $client) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nombre Completo</label>
            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name', $client->full_name) }}" required>
            @error('full_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $client->email) }}">
            @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $client->phone) }}" required>
            @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Teléfono Secundario</label>
            <input type="text" name="phone2" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2', $client->phone2) }}">
            @error('phone2') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Dirección</label>
            <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $client->address) }}</textarea>
            @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Fecha de Nacimiento</label>
            <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date', $client->birth_date) }}">
            @error('birth_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Inicio del Trámite</label>
            <input type="date" name="inicio_tramite" class="form-control @error('inicio_tramite') is-invalid @enderror" value="{{ old('inicio_tramite', $client->inicio_tramite) }}">
            @error('inicio_tramite') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Tipo de Trámite</label>
            <input type="text" name="tipo_tramite" class="form-control @error('tipo_tramite') is-invalid @enderror" value="{{ old('tipo_tramite', $client->tipo_tramite) }}">
            @error('tipo_tramite') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Destino</label>
            <input type="text" name="destino" class="form-control @error('destino') is-invalid @enderror" value="{{ old('destino', $client->destino) }}">
            @error('destino') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Estado del Trámite</label>
            <select name="estado_tramite" class="form-control @error('estado_tramite') is-invalid @enderror">
                <option value="pendiente" {{ old('estado_tramite', $client->estado_tramite) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en_proceso" {{ old('estado_tramite', $client->estado_tramite) == 'en_proceso' ? 'selected' : '' }}>En proceso</option>
                <option value="completado" {{ old('estado_tramite', $client->estado_tramite) == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
            @error('estado_tramite') <span class="invalid-feedback">{{ $message }}</span> @enderror
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
