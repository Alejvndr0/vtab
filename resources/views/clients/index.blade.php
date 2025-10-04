@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Clientes</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary">Nuevo Cliente</a>
        <a href="{{ route('home') }}" class="btn btn-primary">panel</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Tipo de Trámite</th>
                    <th>Destino</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->full_name }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->tipo_tramite }}</td>
                        <td>{{ $client->destino }}</td>
                        <td>{{ $client->costo ? number_format($client->costo, 2) : '' }}</td>
                        <td>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-sm btn-warning">Editar</a>
                            @if (auth()->user()->isAdmin())
                                <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro?')">Eliminar</button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $clients->links() }}
    </div>
@endsection