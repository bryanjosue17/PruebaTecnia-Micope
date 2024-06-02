@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Servicio</div>
    <div class="card-body">
        <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fecha_recepcion" class="form-label">Fecha de Recepción</label>
                <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" value="{{ $servicio->fecha_recepcion }}">
            </div>
            <div class="mb-3">
                <label for="id_estado" class="form-label">Estado</label>
                <select class="form-select" id="id_estado" name="id_estado">
                    @foreach($estado_servicios as $estado)
                        <option value="{{ $estado->id }}" @if($servicio->id_estado == $estado->id) selected @endif>{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select class="form-select" id="id_cliente" name="id_cliente">
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" @if($servicio->id_cliente == $cliente->id) selected @endif>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_equipo" class="form-label">Equipo</label>
                <select class="form-select" id="id_equipo" name="id_equipo">
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id }}" @if($servicio->id_equipo == $equipo->id) selected @endif>{{ $equipo->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico</label>
                <textarea class="form-control" id="diagnostico" name="diagnostico">{{ $servicio->diagnostico }}</textarea>
            </div>
            <div class="mb-3">
                <label for="solucion" class="form-label">Solución</label>
                <textarea class="form-control" id="solucion" name="solucion">{{ $servicio->solucion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
