@extends('layout/template')

@section('title', 'Editar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Editar Formulario</h2>

        @if ($errors->any())
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{url ('equipos/'.$equipo->id) }}" method="post">
            @method("PUT")
            @csrf

            <div class="mb-3 row">
                <label for="año" class="col-sm-2 col-form-label">Año:</label>
                <div class="col-sm-5">
                   <input type="date"  class="form-control" name="año" id="año" value="{{ $equipo->año }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="aforo" class="col-sm-2 col-form-label">Aforo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="aforo" id="aforo" value="{{ $equipo->aforo }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="estadio" class="col-sm-2 col-form-label">Estadio:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="estadio" id="estadio" value="{{ $equipo->estadio }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="codigo" id="codigo" value="{{ $equipo->codigo }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="ciudad" class="col-sm-2 col-form-label">Ciudad:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="ciudad" id="ciudad" value="{{ $equipo->ciudad }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="nombre" id="nombre" value="{{ $equipo->nombre }}" required>
                </div>
            </div>
            <a href="{{ url('equipos') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>