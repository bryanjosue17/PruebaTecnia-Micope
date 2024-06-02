@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Marca</div>
    <div class="card-body">
        <form action="{{ route('marcas.update', $marca->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $marca->nombre }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
