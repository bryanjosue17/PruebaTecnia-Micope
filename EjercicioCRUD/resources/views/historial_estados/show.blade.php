@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Estado del Historial</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $historial_estado->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Servicio</label>
            <p>{{ $historial_estado->servicio->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Estado</label>
            <p>{{ $historial_estado->estado->nombre }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <p>{{ $historial_estado->fecha }}</p>
        </div>
        <a href="{{ route('historial_estados.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
