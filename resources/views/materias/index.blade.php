<h1>Lista de Materias</h1>
<a href="{{ route('materias.create') }}">Crear Nueva Materia</a>
<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Créditos</th>
        <th>Profesor</th>
        <th>Acciones</th>
    </tr>
    @foreach ($materias as $materia)
    <tr>
        <td>{{ $materia->id }}</td>
        <td>{{ $materia->nombre }}</td>
        <td>{{ $materia->creditos }}</td>
        <td>{{ $materia->profesor }}</td>
        <td>
            <a href="{{ route('materias.show', $materia->id) }}">Ver</a> |
            <a href="{{ route('materias.edit', $materia->id) }}">Editar</a> |
            <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Eliminar esta materia?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>