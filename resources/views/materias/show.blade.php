<h1>Detalle de la Materia</h1>
<a href="{{ route('materias.index') }}">Volver al listado</a>
<hr>

<p><strong>ID:</strong> {{ $materia->id }}</p>
<p><strong>Nombre:</strong> {{ $materia->nombre }}</p>
<p><strong>Créditos:</strong> {{ $materia->creditos }}</p>
<p><strong>Profesor:</strong> {{ $materia->profesor }}</p>
<p><strong>Creado el:</strong> {{ $materia->created_at }}</p>

<a href="{{ route('materias.edit', $materia->id) }}">Editar esta materia</a>