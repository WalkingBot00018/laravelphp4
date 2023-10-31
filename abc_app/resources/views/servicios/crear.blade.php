<h1>Crear Nuevo Servicio</h1>
<form method="POST" action="{{ route('servicios.store') }}">
    @csrf
    <label for="nombre_servicio">Nombre del Servicio</label>
    <input type="text" name="nombre_servicio">
    <label for="descripcion_servicio">Descripción del Servicio</label>
    <textarea name="descripcion_servicio"></textarea>
    <label for="precio">Precio</label>
    <input type="number" name="precio">
    <button type="submit">Guardar</button>
</form>