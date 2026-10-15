<h1>Editar Materia</h1>
<a href="{{ route('materias.index') }}">Volver al listado</a>
<hr>

<form action="{{ route('materias.update', $materia->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ $materia->nombre }}" required><br><br>

    <label>Créditos:</label><br>
    <input type="number" name="creditos" value="{{ $materia->creditos }}" required><br><br>

    <label>Profesor:</label><br>
    <input type="text" name="profesor" value="{{ $materia->profesor }}" required><br><br>

    <button type="submit">Actualizar Materia</button>
</form>