@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Agregar Historial de Estado</div>
    <div class="card-body">
        <form action="{{ route('historial_estados.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id_servicio" class="form-label">Servicio</label>
                <select class="form-control" id="id_servicio" name="id_servicio" required>
                    @foreach($servicios as $servicio)
                        <option value="{{ $servicio->id }}">{{ $servicio->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_estado" class="form-label">Estado</label>
                <select class="form-control" id="id_estado" name="id_estado" required>
                    @foreach($estado_servicios as $estado)
                        <option value="{{ $estado->id }}">{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
