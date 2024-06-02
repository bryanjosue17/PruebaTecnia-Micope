@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Historial de Estado</div>
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
        <form action="{{ route('historial_estados.update', $historial_estado->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id_servicio" class="form-label">Servicio</label>
                <select class="form-select" id="id_servicio" name="id_servicio">
                    @foreach($servicios as $servicio)
                        <option value="{{ $servicio->id }}" {{ $historial_estado->id_servicio == $servicio->id ? 'selected' : '' }}>{{ $servicio->id }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_estado" class="form-label">Estado</label>
                <select class="form-select" id="id_estado" name="id_estado">
                    @foreach($estado_servicios as $estado)
                        <option value="{{ $estado->id }}" {{ $historial_estado->id_estado == $estado->id ? 'selected' : '' }}>{{ $estado->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="datetime-local" class="form-control" id="fecha" name="fecha" value="{{ \Carbon\Carbon::parse($historial_estado->fecha)->format('Y-m-d\TH:i') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
