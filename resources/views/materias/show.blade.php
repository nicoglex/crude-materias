@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">Detalles de la Materia</h4>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><strong>ID:</strong> {{ $materia->id }}</li>
                    <li class="list-group-item"><strong>Nombre:</strong> {{ $materia->nombre }}</li>
                    <li class="list-group-item"><strong>Créditos:</strong> {{ $materia->creditos }}</li>
                    <li class="list-group-item"><strong>Profesor:</strong> {{ $materia->profesor }}</li>
                    <li class="list-group-item text-muted"><small>Creado el: {{ $materia->created_at }}</small></li>
                </ul>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('materias.index') }}" class="btn btn-secondary">Volver al listado</a>
                    <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning">Editar esta materia</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection