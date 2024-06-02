@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Crear Equipo</div>
    <div class="card-body">
        <form action="{{ route('equipos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="mb-3">
                <label for="numero_serie" class="form-label">Número de Serie</label>
                <input type="text" class="form-control" id="numero_serie" name="numero_serie">
            </div>
            <div class="mb-3">
                <label for="descripcion_problema" class="form-label">Descripción del Problema</label>
                <textarea class="form-control" id="descripcion_problema" name="descripcion_problema"></textarea>
            </div>
            <div class="mb-3">
                <label for="id_marca" class="form-label">Marca</label>
                <select class="form-control" id="id_marca" name="id_marca" required>
                <option value="">Sin selección</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_tipo_equipo" class="form-label">Tipo de Equipo</label>
                <select class="form-control" id="id_tipo_equipo" name="id_tipo_equipo" required>
                <option value="">Sin selección</option>
                    @foreach($tipos_equipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
