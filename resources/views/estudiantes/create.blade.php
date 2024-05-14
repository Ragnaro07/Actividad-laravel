@extends('layouts.app')

@section('titulo','crear estudiante')

@section('contenido')
<br>
<h3>Crear un nuevo estudiante</h3>
    <form action="/estudiantes" method="post">
        @csrf
        <div class="mb-3">
        <label for="nombreestudiante" class="form-label">Nombre del estudiante</label>
        <input type="text" class="form-control" id="nobreestudiante" name="nombre">
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido del estudiante</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
