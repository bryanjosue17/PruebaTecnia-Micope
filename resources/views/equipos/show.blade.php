@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Equipo</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">Modelo</label>
            <p>{{ $equipo->modelo }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Número de Serie</label>
            <p>{{ $equipo->numero_serie }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Descripción del Problema</label>
            <p>{{ $equipo->descripcion_problema }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Marca</label>
            <p>{{ $equipo->marca->nombre }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Tipo de Equipo</label>
            <p>{{ $equipo->tipoEquipo->nombre }}</p>
        </div>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary mt-3">Volver</a>
    </div>
</div>
@endsection
