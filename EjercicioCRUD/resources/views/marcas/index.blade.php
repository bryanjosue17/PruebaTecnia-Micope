@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Marcas
        <a href="{{ route('marcas.create') }}" class="btn btn-primary float-end">Agregar Marca</a>
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
                @foreach($marcas as $marca)
                    <tr>
                        <td>{{ $marca->id }}</td>
                        <td>{{ $marca->nombre }}</td>
                        <td>
                            <a href="{{ route('marcas.show', $marca->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('marcas.destroy', $marca->id) }}" method="POST" style="display:inline-block;">
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
