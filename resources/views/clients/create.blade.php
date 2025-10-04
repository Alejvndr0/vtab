@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Nuevo Cliente</h1>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nombre Completo</label>
                <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" value="{{ old('full_name') }}" required>
                @error('full_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Teléfono</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Teléfono Secundario</label>
                <input type="text" name="phone2" class="form-control @error('phone2') is-invalid @enderror" value="{{ old('phone2') }}">
                @error('phone2') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                @error('address') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento</label>
                <input type="date" name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}">
                @error('birth_date') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Inicio del Trámite</label>
                <input type="date" name="inicio_tramite" class="form-control @error('inicio_tramite') is-invalid @enderror" value="{{ old('inicio_tramite') }}">
                @error('inicio_tramite') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Tipo de Trámite</label>
                <input type="text" name="tipo_tramite" class="form-control @error('tipo_tramite') is-invalid @enderror" value="{{ old('tipo_tramite') }}">
                @error('tipo_tramite') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Destino</label>
                <input type="text" name="destino" class="form-control @error('destino') is-invalid @enderror" value="{{ old('destino') }}">
                @error('destino') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Costo</label>
                <input type="number" step="0.01" name="costo" class="form-control @error('costo') is-invalid @enderror" value="{{ old('costo') }}">
                @error('costo') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Número de Contrato</label>
                <input type="text" name="numero_contrato" class="form-control @error('numero_contrato') is-invalid @enderror" value="{{ old('numero_contrato') }}">
                @error('numero_contrato') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label>Notas</label>
                <textarea name="notes" class="form-control @error('notes') is-invalid @enderror">{{ old('notes') }}</textarea>
                @error('notes') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('clients.index') }}" class="btn btn-primary">volver</a>
        </form>
    </div>
@endsection