@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <span>Historial de Estados</span>
        <a href="{{ route('historial_estados.create') }}" class="btn btn-primary">Agregar Nuevo</a>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Servicio</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($historial_estados as $historial_estado)
                    <tr>
                        <td>{{ $historial_estado->id }}</td>
                        <td>{{ $historial_estado->servicio->nombre }}</td>
                        <td>{{ $historial_estado->estado->nombre }}</td>
                        <td>{{ $historial_estado->fecha }}</td>
                        <td>
                            <a href="{{ route('historial_estados.show', $historial_estado->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('historial_estados.edit', $historial_estado->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('historial_estados.destroy', $historial_estado->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
