@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Tipo de Equipo</div>
    <div class="card-body">
        <form action="{{ route('tipos_equipos.update', $tipos_equipo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $tipos_equipo->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
