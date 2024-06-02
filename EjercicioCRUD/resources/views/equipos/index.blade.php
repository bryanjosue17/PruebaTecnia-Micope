@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Equipos
        <a href="{{ route('equipos.create') }}" class="btn btn-primary float-end">Agregar Equipo</a>
    </div>
    <div class="card-body">
    @if($equipos->isEmpty())
            <p class="text-center">Sin información</p>
        @else
        <table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Número de Serie</th>
            <th>Marca</th>
            <th>Tipo de Equipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipos as $equipo)
            <tr>
                <td>{{ $equipo->id }}</td>
                <td>{{ $equipo->modelo }}</td>
                <td>{{ $equipo->numero_serie }}</td>
                <td>{{ $equipo->marca ? $equipo->marca->nombre : 'N/A' }}</td>
                <td>{{ $equipo->tipoEquipo ? $equipo->tipoEquipo->nombre : 'N/A' }}</td>
                <td>
                    <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
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
