<h1>Detalles del Servicio</h1>
<p>ID de Servicio: {{ $servicio->id_servicio }}</p>
<p>Nombre del Servicio: {{ $servicio->nombre_servicio }}</p>
<p>Descripción del Servicio: {{ $servicio->descripcion_servicio }}</p>
<p>Precio: {{ $servicio->precio }}</p>
<a href="{{ route('servicios.index') }}">Volver al Listado</a>