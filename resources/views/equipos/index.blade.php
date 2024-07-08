@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('equipos/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Año</th>
                <th>Aforo</th>
                <th>Estadio</th>
                <th>Codigo</th>
                <th>Ciudad</th>
                <th>Nombre</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($equipos as $equipo)
            <tr>
              <td>{{ $equipo->id }}</td>
              <td>{{ $equipo->año }}</td>
              <td>{{ $equipo->aforo }}</td>
              <td>{{ $equipo->estadio }}</td>
              <td>{{ $equipo->codigo }}</td>
              <td>{{ $equipo->ciudad }}</td>
              <td>{{ $equipo->nombre }}</td>
              <td><a href="{{ url('equipos/'.$equipo->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('equipos/'.$equipo->id) }}" method="post">
                     @method("DELETE")
                     @csrf
                     <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
              </td>
            </tr>
           </tbody>
           @endforeach
        </table>
    </div>
</main>