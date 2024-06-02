@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Agregar Estado de Servicio</div>
    <div class="card-body">
        <form action="{{ route('estado_servicios.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@endsection
