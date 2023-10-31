<h1>Detalles de la Habitación</h1>
<p>Número de Habitación: {{ $habitacion->nro_habitacion }}</p>
<p>Tipo: {{ $habitacion->tipo }}</p>
<p>Precio: {{ $habitacion->precio }}</p>
<p>Disponibilidad: {{ $habitacion->disponibilidad ? 'Disponible' : 'No disponible' }}</p>
<a href="{{ route('habitacion.index') }}">Volver al Listado</a>