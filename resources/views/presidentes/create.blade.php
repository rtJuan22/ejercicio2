@extends('layout/template')

@section('title', 'Registar Formulario')

@section('contenido')


<main>
    <div class="container py-4">
        <h2>Registrar Formulario</h2>

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

        <form action="{{url ('presidentes') }}" method="post">

            @csrf

            <div class="mb-3 row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="nombre" id="nombre" value="{{ old('nombre') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos:</label>
                <div class="col-sm-5">
                   <input type="text"  class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha De Nacimiento:</label>
                <div class="col-sm-5">
                   <input type="date"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="año" class="col-sm-2 col-form-label">Año:</label>
                <div class="col-sm-5">
                   <input type="date"  class="form-control" name="año" id="año" value="{{ old('año') }}" required>
                </div>
            </div>
            <a href="{{ url('presidentes') }}" class="btn btn-secondary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
</main>