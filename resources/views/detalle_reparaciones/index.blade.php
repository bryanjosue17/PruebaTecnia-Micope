@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Detalles de Reparaciones
        <a href="{{ route('detalle_reparaciones.create') }}" class="btn btn-primary float-end">Agregar Detalle de Reparación</a>
    </div>
    <div class="card-body">
        @if($detalles_reparacion->isEmpty())
            <p class="text-center">No hay detalles de reparaciones registrados.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Servicio</th>
                        <th>Pieza</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($detalles_reparacion as $detalle)
                        <tr>
                            <td>{{ $detalle->id }}</td>
                            <td>{{ $detalle->servicio->id ?? 'N/A' }}</td>
                            <td>{{ $detalle->pieza->nombre ?? 'N/A' }}</td>
                            <td>{{ $detalle->descripcion }}</td>
                            <td>{{ $detalle->cantidad }}</td>
                            <td>{{ $detalle->costo }}</td>
                            <td>
                                <a href="{{ route('detalle_reparaciones.show', $detalle->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('detalle_reparaciones.edit', $detalle->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('detalle_reparaciones.destroy', $detalle->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este detalle de reparación?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
