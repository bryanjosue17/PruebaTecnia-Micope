@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Editar Servicio
    </div>
    <div class="card-body">
        <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="fecha_recepcion" class="form-label">Fecha Recepción</label>
                <input type="date" name="fecha_recepcion" id="fecha_recepcion" class="form-control" value="{{ $servicio->fecha_recepcion }}" required>
            </div>
            <div class="mb-3">
                <label for="id_estado" class="form-label">Estado</label>
                <select name="id_estado" id="id_estado" class="form-control" required>
                    <option value="">Sin selección</option>
                    @foreach($estado_servicios as $estado)
                        <option value="{{ $estado->id }}" {{ $estado->id == $servicio->id_estado ? 'selected' : '' }}>{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-control" required>
                    <option value="">Sin selección</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $cliente->id == $servicio->id_cliente ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_equipo" class="form-label">Equipo</label>
                <select name="id_equipo" id="id_equipo" class="form-control" required>
                    <option value="">Sin selección</option>
                    foreach($equipos as $equipo)
                        <option value="{{ $equipo->id }}" {{ $equipo->id == $servicio->id_equipo ? 'selected' : '' }}>{{ $equipo->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_tecnico" class="form-label">Técnico</label>
                <select name="id_tecnico" id="id_tecnico" class="form-control">
                    <option value="">Sin selección</option>
                    @foreach($tecnicos as $tecnico)
                        <option value="{{ $tecnico->id }}" {{ $tecnico->id == $servicio->id_tecnico ? 'selected' : '' }}>{{ $tecnico->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico</label>
                <textarea name="diagnostico" id="diagnostico" class="form-control">{{ $servicio->diagnostico }}</textarea>
            </div>
            <div class="mb-3">
                <label for="solucion" class="form-label">Solución</label>
                <textarea name="solucion" id="solucion" class="form-control">{{ $servicio->solucion }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
