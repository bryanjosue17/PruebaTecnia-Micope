@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Detalle de Reparación</div>
    <div class="card-body">
        <p class="card-text"><strong>Servicio:</strong> {{ $detalle_reparacione->servicio->id ?? 'N/A' }}</p>
        <p class="card-text"><strong>Pieza:</strong> {{ $detalle_reparacione->pieza->nombre ?? 'N/A' }}</p>
        <p class="card-text"><strong>Descripción:</strong> {{ $detalle_reparacione->descripcion }}</p>
        <p class="card-text"><strong>Cantidad:</strong> {{ $detalle_reparacione->cantidad }}</p>
        <p class="card-text"><strong>Costo:</strong> {{ $detalle_reparacione->costo }}</p>
        <a href="{{ route('detalle_reparaciones.index') }}" class="btn btn-secondary">Volver</a>
    </div>
</div>
@endsection
