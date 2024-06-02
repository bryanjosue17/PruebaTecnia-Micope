@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">
        Proveedores
        <a href="{{ route('proveedores.create') }}" class="btn btn-primary float-end">Agregar Proveedor</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedore)
                    <tr>
                        <td>{{ $proveedore->id }}</td>
                        <td>{{ $proveedore->nombre }}</td>
                        <td>{{ $proveedore->direccion }}</td>
                        <td>{{ $proveedore->telefono }}</td>
                        <td>{{ $proveedore->email }}</td>
                        <td>
                            <a href="{{ route('proveedores.show', $proveedore->id) }}" class="btn btn-success btn-sm">Ver</a>
                            <a href="{{ route('proveedores.edit', $proveedore->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('proveedores.destroy', $proveedore->id) }}" method="POST" style="display:inline-block;">
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
