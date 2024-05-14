@extends('layouts.app')

@section('titulo','crear aspirante')

@section('contenido')
<br>
<h3 class="text-center"> Listado de estudiantes</h3>
<br>
<div class="row">
    @foreach ($student as $aspirante)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$aspirante->nombre}}</h5>
              <p class="card-text">{{$aspirante->apellido}}</p>
              <p class="card-text">{{$aspirante->email}}</p>
              <a href="#" class="btn btn-success">Ver detalles</a>
            </div>
          </div>
    </div>
    @endforeach
</div>

@endsection
