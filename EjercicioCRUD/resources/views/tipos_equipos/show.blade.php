@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Detalle del Tipo de Equipo</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $tipos_equipo->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $tipos_equipo->nombre }}</p>
        </div>
        <a href="{{ route('tipos_equipos.index') }}" class="btn btn-primary">Volver</a>
    </div>
</div>
@endsection
