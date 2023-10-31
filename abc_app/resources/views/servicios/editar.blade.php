<h1>Editar Servicio</h1>
<form method="POST" action="{{ route('servicios.update', $servicio->id_servicio) }}">
    @csrf
    @method('PUT')
    <label for="nombre_servicio">Nombre del Servicio</label>
    <input type="text" name="nombre_servicio" value="{{ $servicio->nombre_servicio }}">
    <label for="descripcion_servicio">Descripción del Servicio</label>
    <textarea name="descripcion_servicio">{{ $servicio->descripcion_servicio }}</textarea>
    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{ $servicio->precio }}">
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('servicios.mostrar', $servicio->id_servicio) }}">Ver Detalles</a>