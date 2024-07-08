@extends('layout/template')

@section('title', 'Formulario')

@section('contenido')

<main>
    <div class="container py-4">
        <h2>Listado De Registros</h2>
        <a href="{{ url('presidentes/create') }}" class="btn btn-primary btn-sm">Nuevo Registro</a>
        <table class="table table-hover">
           <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Fecha De Nacimiento</th>
                <th>Año</th>
                <th></th>
                <th></th>
            </tr>
           </thead>
           <tbody>
            @foreach($presidentes as $presidente)
            <tr>
              <td>{{ $presidente->id }}</td>
              <td>{{ $presidente->nombre }}</td>
              <td>{{ $presidente->apellidos }}</td>
              <td>{{ $presidente->fecha_nacimiento }}</td>
              <td>{{ $presidente->año }}</td>
              <td><a href="{{ url('presidentes/'.$presidente->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
              <td>
                <form action="{{ url('presidentes/'.$presidente->id) }}" method="post">
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