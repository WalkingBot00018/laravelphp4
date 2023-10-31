<h1>Detalles del Usuario</h1>
<p>Número de Documento: {{ $usuario->nro_doc }}</p>
<p>Nombre de Usuario: {{ $usuario->nombre_usuario }}</p>
<p>Rol: {{ $usuario->rol }}</p>
<a href="{{ route('usuarios.index') }}">Volver al Listado</a>