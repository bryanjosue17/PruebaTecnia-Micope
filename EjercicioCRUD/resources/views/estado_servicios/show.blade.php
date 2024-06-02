@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Estado de Servicio</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $estado_servicio->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $estado_servicio->nombre }}</p>
        </div>
        <a href="{{ route('estado_servicios.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
