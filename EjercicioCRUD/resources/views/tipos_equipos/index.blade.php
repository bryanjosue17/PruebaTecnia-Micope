@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Tipos de Equipos
        <a href="{{ route('tipos_equipos.create') }}" class="btn btn-primary float-end">Agregar Tipo de Equipo</a>
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
                @foreach($tipos_equipos as $tipos_equipo)
                    <tr>
                        <td>{{ $tipos_equipo->id }}</td>
                        <td>{{ $tipos_equipo->nombre }}</td>
                        <td>
                            <a href="{{ route('tipos_equipos.show', $tipos_equipo->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('tipos_equipos.edit', $tipos_equipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('tipos_equipos.destroy', $tipos_equipo->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este tipo de equipo?');">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
