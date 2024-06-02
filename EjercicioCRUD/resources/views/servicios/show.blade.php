@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Detalles del Servicio
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary float-end">Volver</a>
    </div>
    <div class="card-body">
        <p><strong>Fecha Recepción:</strong> {{ $servicio->fecha_recepcion }}</p>
        <p><strong>Estado:</strong> {{ $servicio->estado->nombre }}</p>
        <p><strong>Cliente:</strong> {{ $servicio->cliente->nombre }}</p>
        <p><strong>Equipo:</strong> {{ $servicio->equipo->modelo }}</p>
        <p><strong>Técnico:</strong> {{ $servicio->tecnico ? $servicio->tecnico->nombre : 'No asignado' }}</p>
        <p><strong>Diagnóstico:</strong> {{ $servicio->diagnostico }}</p>
        <p><strong>Solución:</strong> {{ $servicio->solucion }}</p>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
