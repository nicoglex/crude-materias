<h1>Crear Nueva Materia</h1>
<a href="{{ route('materias.index') }}">Volver al listado</a>
<hr>

<form action="{{ route('materias.store') }}" method="POST">
    @csrf
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Créditos:</label><br>
    <input type="number" name="creditos" required><br><br>

    <label>Profesor:</label><br>
    <input type="text" name="profesor" required><br><br>

    <button type="submit">Guardar Materia</button>
</form>