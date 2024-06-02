@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Piezas
        <a href="{{ route('piezas.create') }}" class="btn btn-primary float-end">Agregar Pieza</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Cantidad Disponible</th>
                    <th>Precio</th>
                    <th>Proveedor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($piezas as $pieza)
                    <tr>
                        <td>{{ $pieza->id }}</td>
                        <td>{{ $pieza->nombre }}</td>
                        <td>{{ $pieza->descripcion }}</td>
                        <td>{{ $pieza->cantidad_disponible }}</td>
                        <td>{{ $pieza->precio }}</td>
                        <td>{{ $pieza->proveedor->nombre }}</td>
                        <td>
                            <a href="{{ route('piezas.show', $pieza->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('piezas.edit', $pieza->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('piezas.destroy', $pieza->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
