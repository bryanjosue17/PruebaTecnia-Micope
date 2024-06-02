@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Pieza</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $pieza->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $pieza->nombre }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción</label>
            <p>{{ $pieza->descripcion }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Cantidad Disponible</label>
            <p>{{ $pieza->cantidad_disponible }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Precio</label>
            <p>{{ $pieza->precio }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Proveedor</label>
            <p>{{ $pieza->proveedor->nombre }}</p>
        </div>
        <a href="{{ route('piezas.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
