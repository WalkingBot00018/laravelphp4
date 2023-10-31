<h1>Listado de Usuarios</h1>
<table>
    <thead>
        <tr>
            <th>Número de Documento</th>
            <th>Nombre de Usuario</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nro_doc }}</td>
                <td>{{ $usuario->nombre_usuario }}</td>
                <td>{{ $usuario->rol }}</td>
                <td>
                    <a href="{{ route('usuarios.mostrar', $usuario->id) }}">Ver</a>
                    <a href="{{ route('usuarios.editar', $usuario->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('usuarios.crear') }}">Crear Usuario</a>