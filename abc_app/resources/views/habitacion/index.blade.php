<h1>Listado de Habitaciones</h1>
<table>
    <thead>
        <tr>
            <th>Número de Habitación</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Disponibilidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($habitaciones as $habitacion)
            <tr>
                <td>{{ $habitacion->nro_habitacion }}</td>
                <td>{{ $habitacion->tipo }}</td>
                <td>{{ $habitacion->precio }}</td>
                <td>{{ $habitacion->disponibilidad ? 'Disponible' : 'No disponible' }}</td>
                <td>
                    <a href="{{ route('habitacion.mostrar', $habitacion->nro_habitacion) }}">Ver</a>
                    <a href="{{ route('habitacion.editar', $habitacion->nro_habitacion) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('habitacion.crear') }}">Crear Habitación</a>