@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Agregar Detalle de Reparación</div>
    <div class="card-body">
        <form action="{{ route('detalle_reparaciones.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_servicio" class="form-label">Servicio</label>
                <select class="form-select" id="id_servicio" name="id_servicio">
                <option value="">Sin selección</option>
                    @foreach($servicios as $servicio)
                        <option value="{{ $servicio->id }}">{{ $servicio->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_pieza" class="form-label">Pieza</label>
                <select class="form-select" id="id_pieza" name="id_pieza">
                <option value="">Sin selección</option>
                    @foreach($piezas as $pieza)
                        <option value="{{ $pieza->id }}">{{ $pieza->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required min="1">
            </div>
            <div class="mb-3">
                <label for="costo" class="form-label">Costo</label>
                <input type="number" class="form-control" id="costo" name="costo" required min="0" step="0.01">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
