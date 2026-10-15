@extends('layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Materias</h2>
    <a href="{{ route('materias.create') }}" class="btn btn-primary">➕ Crear Nueva Materia</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Créditos</th>
                    <th>Profesor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td class="fw-bold">{{ $materia->nombre }}</td>
                    <td><span class="badge bg-secondary">{{ $materia->creditos }} créditos</span></td>
                    <td>{{ $materia->profesor }}</td>
                    <td>
                        <a href="{{ route('materias.show', $materia->id) }}" class="btn btn-info btn-sm text-white">Ver</a>
                        <a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que deseas eliminar esta materia?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection