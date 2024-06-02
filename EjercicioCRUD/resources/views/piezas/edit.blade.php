@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Editar Pieza</div>
    <div class="card-body">
        <form action="{{ route('piezas.update', $pieza->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $pieza->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion">{{ $pieza->descripcion }}</textarea>
            </div>
            <div class="mb-3">
                <label for="cantidad_disponible" class="form-label">Cantidad Disponible</label>
                <input type="number" class="form-control" id="cantidad_disponible" name="cantidad_disponible" value="{{ $pieza->cantidad_disponible }}" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{ $pieza->precio }}" required>
            </div>
            <div class="mb-3">
                <label for="id_proveedor" class="form-label">Proveedor</label>
                <select class="form-select" id="id_proveedor" name="id_proveedor">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}" {{ $pieza->id_proveedor == $proveedor->id ? 'selected' : '' }}>{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection
