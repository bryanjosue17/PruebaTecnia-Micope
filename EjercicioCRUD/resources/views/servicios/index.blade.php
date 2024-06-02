@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Servicios
        <a href="{{ route('servicios.create') }}" class="btn btn-primary float-end">Agregar Servicio</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha Recepción</th>
                    <th>Estado</th>
                    <th>Cliente</th>
                    <th>Técnico</th>
                    <th>Equipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->id }}</td>
                        <td>{{ $servicio->fecha_recepcion }}</td>
                        <td>{{ $servicio->estado->nombre }}</td>
                        <td>{{ $servicio->cliente->nombre }}</td>
                        <td>{{ $servicio->equipo->modelo }}</td>
                        <td>
                            <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline-block;">
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
