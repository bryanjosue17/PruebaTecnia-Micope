@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Detalle del Proveedor</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $proveedore->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $proveedore->nombre }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Dirección</label>
            <p>{{ $proveedore->direccion }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Teléfono</label>
            <p>{{ $proveedore->telefono }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <p>{{ $proveedore->email }}</p>
        </div>
        <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
