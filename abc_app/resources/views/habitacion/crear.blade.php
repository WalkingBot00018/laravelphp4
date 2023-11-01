@extends('layouts.app')

@section('content')
<h1>Crear Nueva Habitación</h1>
<form method="POST" action="{{ route('habitacion.store') }}">
    @csrf
    <label for="nro_habitacion">Número de Habitación</label>
    <input type="text" name="nro_habitacion">
    <label for="tipo">Tipo</label>
    <input type="text" name="tipo">
    <label for="precio">Precio</label>
    <input type="number" name="precio">
    <label for="disponibilidad">Disponibilidad</label>
    <input type="checkbox" name="disponibilidad" value="1">
    <button type="submit">Guardar</button>
</form>