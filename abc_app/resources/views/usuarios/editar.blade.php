<h1>Editar Usuario</h1>
<form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
    @csrf
    @method('PUT')
    <label for="nro_doc">Número de Documento</label>
    <input type="text" name="nro_doc" value="{{ $usuario->nro_doc }}">
    <label for="nombre_usuario">Nombre de Usuario</label>
    <input type="text" name="nombre_usuario" value="{{ $usuario->nombre_usuario }}">
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña">
    <label for="id_rol">Rol</label>
    <select name="id_rol">
        <option value="1" {{ $usuario->id_rol == 1 ? 'selected' : '' }}>Rol 1</option>
        <option value="2" {{ $usuario->id_rol == 2 ? 'selected' : '' }}>Rol 2</option>
    </select>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('usuarios.mostrar', $usuario->id) }}">Ver Detalles</a>


