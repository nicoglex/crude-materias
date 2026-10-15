@extends('layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h4 class="mb-0 text-dark">Editar Materia</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('materias.update', $materia->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre de la materia:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $materia->nombre }}" required>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Créditos:</label>
                        <input type="number" name="creditos" class="form-control" value="{{ $materia->creditos }}" required>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Profesor:</label>
                        <input type="text" name="profesor" class="form-control" value="{{ $materia->profesor }}" required>
                    </div>
                
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('materias.index') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-warning">Actualizar Materia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection