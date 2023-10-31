<h1>Editar Habitación</h1>
<form method="POST" action="{{ route('habitacion.update', $habitacion->nro_habitacion) }}">
    @csrf
    @method('PUT')
    <label for="nro_habitacion">Número de Habitación</label>
    <input type="text" name="nro_habitacion" value="{{ $habitacion->nro_habitacion }}">
    <label for="tipo">Tipo</label>
    <input type="text" name="tipo" value="{{ $habitacion->tipo }}">
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{ $habitacion->precio }}">
    <label for="disponibilidad">Disponibilidad</label>
    <input type="checkbox" name="disponibilidad" value="1" {{ $habitacion->disponibilidad ? 'checked' : '' }}>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('habitacion.mostrar', $habitacion->nro_habitacion) }}">Ver Detalles</a>