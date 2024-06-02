@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Detalles del Cliente</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $cliente->nombre }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <p>{{ $cliente->direccion }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <p>{{ $cliente->telefono }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <p>{{ $cliente->email }}</p>
        </div>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
    </div>
</div>
@endsection
