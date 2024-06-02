@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Estados de Servicios
        <a href="{{ route('estado_servicios.create') }}" class="btn btn-primary float-end">Agregar Estado</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estado_servicios as $estado_servicio)
                    <tr>
                        <td>{{ $estado_servicio->id }}</td>
                        <td>{{ $estado_servicio->nombre }}</td>
                        <td>
                            <a href="{{ route('estado_servicios.show', $estado_servicio->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('estado_servicios.edit', $estado_servicio->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('estado_servicios.destroy', $estado_servicio->id) }}" method="POST" style="display:inline-block;">
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
