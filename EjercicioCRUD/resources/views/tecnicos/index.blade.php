@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Técnicos
        <a href="{{ route('tecnicos.create') }}" class="btn btn-primary float-end">Agregar Técnico</a>
    </div>
    <div class="card-body">
        @if($tecnicos->isEmpty())
            <p class="text-center">Sin información</p>
        @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tecnicos as $tecnico)
                    <tr>
                        <td>{{ $tecnico->id }}</td>
                        <td>{{ $tecnico->nombre }}</td>
                        <td>
                            <a href="{{ route('tecnicos.show', $tecnico->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('tecnicos.edit', $tecnico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('tecnicos.destroy', $tecnico->id) }}" method="POST" style="display:inline-block;">
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
