@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Detalles del Servicio</div>
    <div class="card-body">
        <h5 class="card-title">Servicio #{{ $servicio->id }}</h5>
        <p class="card-text"><strong>Fecha de Recepción:</strong> {{ $servicio->fecha_recepcion }}</p>
        <p class="card-text"><strong>Estado:</strong> {{ $servicio->estado->nombre }}</p>
        <p class="card-text"><strong>Cliente:</strong> {{ $servicio->cliente->nombre }}</p>
        <p class="card-text"><strong>Equipo:</strong> {{ $servicio->equipo->modelo }}</p>
        <p class="card-text"><strong>Diagnóstico:</strong> {{ $servicio->diagnostico }}</p>
        <p class="card-text"><strong>Solución:</strong> {{ $servicio->solucion }}</p>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
