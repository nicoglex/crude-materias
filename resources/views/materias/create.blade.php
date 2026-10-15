@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Crear Nueva Materia</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('materias.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nombre de la materia:</label>
                        <input type="text" name="nombre" class="form-control" required placeholder="Ej. Programación Orientada a Objetos">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Créditos:</label>
                        <input type="number" name="creditos" class="form-control" required placeholder="Ej. 8">
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Profesor:</label>
                        <input type="text" name="profesor" class="form-control" required placeholder="Nombre del docente">
                    </div>
                
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar Materia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection