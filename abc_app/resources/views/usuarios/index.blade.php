<h1>Listado de Usuarios</h1>
<link rel="stylesheet" href="{{ asset('css/index.css') }}"> 
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
                    {{-- <a href="{{ route('usuarios.destroy', $usuario->id) }}">eliminar</a> --}}
                    <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('usuarios.crear') }}" class="q">Crear Usuario</a>