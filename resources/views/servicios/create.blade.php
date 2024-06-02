@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Agregar Servicio</div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('servicios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="fecha_recepcion" class="form-label">Fecha de Recepción</label>
                <input type="date" class="form-control" id="fecha_recepcion" name="fecha_recepcion" value="{{ old('fecha_recepcion') }}" required>
            </div>
            <div class="mb-3">
                <label for="id_estado" class="form-label">Estado</label>
                <select class="form-select" id="id_estado" name="id_estado" required>
                    @foreach($estado_servicios as $estado)
                        <option value="{{ $estado->id }}" {{ old('id_estado') == $estado->id ? 'selected' : '' }}>{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select class="form-select" id="id_cliente" name="id_cliente" required>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ old('id_cliente') == $cliente->id ? 'selected' : '' }}>{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_equipo" class="form-label">Equipo</label>
                <select class="form-select" id="id_equipo" name="id_equipo" required>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id }}" {{ old('id_equipo') == $equipo->id ? 'selected' : '' }}>{{ $equipo->modelo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="diagnostico" class="form-label">Diagnóstico</label>
                <textarea class="form-control" id="diagnostico" name="diagnostico">{{ old('diagnostico') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="solucion" class="form-label">Solución</label>
                <textarea class="form-control" id="solucion" name="solucion">{{ old('solucion') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
