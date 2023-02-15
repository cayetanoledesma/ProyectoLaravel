<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
<h1>listado de alumnos</h1>
<br>
<a href="{{ url('alumno/create') }}">Registrar alumno</a>

@if(Session::has('mensaje'))
<br>
{{  Session::get('mensaje') }}
@endif

<hr>


<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>foto</th>
            <th>nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Edad</th>
            <th>Direccion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>

    @foreach ($alumnos as $alumno)
        
        <tr>
            <td>{{ $alumno->id }} </td>  
            <td><img src="{{ asset('storage') . '/' . $alumno->foto }}" width="200" /></td>
            <td>{{ $alumno->foto }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->email }}</td>
            <td>{{ $alumno->edad }}</td>
            <td>{{ $alumno->direccion }}</td>
            <td> 
            <a href="{{ url('alumno/' . $alumno->id) }}">Ver</a>  
            <a href="{{ url('/alumno/' . $alumno->id . '/edit') }}">Editar </a> | 
                <form action="{{ url('alumno/' . $alumno->id) }}" method="post">
                @csrf 
                {{ method_field('DELETE') }}
                <input type="submit" onclick = "return confirm('Se va a eliminar el usuario #{{ $alumno->id}}')" value= "Borrar">
                </form>
        </td>
        </tr>

    @endforeach
    </tbody>
</table>
</body>
</div>
@endsection
</html>