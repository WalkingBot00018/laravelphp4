<h1>Listado de Servicios</h1>
<table>
    <thead>
        <tr>
            <th>ID de Servicio</th>
            <th>Nombre del Servicio</th>
            <th>Descripción del Servicio</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
            <tr>
                <td>{{ $servicio->id_servicio }}</td>
                <td>{{ $servicio->nombre_servicio }}</td>
                <td>{{ $servicio->descripcion_servicio }}</td>
                <td>{{ $servicio->precio }}</td>
                <td>
                    <a href="{{ route('servicios.mostrar', $servicio->id_servicio) }}">Ver</a>
                    <a href="{{ route('servicios.editar', $servicio->id_servicio) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('servicios.crear') }}">Crear Servicio</a>