@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <div class="card-header">Marca</div>
    <div class="card-body">
        <div class="mb-3">
            <label class="form-label">ID</label>
            <p>{{ $marca->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <p>{{ $marca->nombre }}</p>
        </div>
        <a href="{{ route('marcas.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>
@endsection
