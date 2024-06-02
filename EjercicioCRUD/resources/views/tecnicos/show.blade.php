@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Técnico</div>
                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $tecnico->nombre }}</p>
                    <a href="{{ route('tecnicos.index') }}" class="btn btn-secondary">Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
