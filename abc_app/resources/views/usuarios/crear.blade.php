<h1>Crear Nuevo Usuario</h1>
<form method="POST" action="{{ route('usuarios.store') }}">
    @csrf
    <label for="nro_doc">Número de Documento</label>
    <input type="text" name="nro_doc">
    <label for="nombre_usuario">Nombre de Usuario</label>
    <input type="text" name="nombre_usuario">
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña">
    <label for="id_rol">Rol</label>
    <select name="id_rol">
        <option value="1">Rol 1</option>
        <option value="2">Rol 2</option>
        <!-- Agrega más opciones según tus roles -->
    </select>
    <button type="submit">Guardar</button>
</form>