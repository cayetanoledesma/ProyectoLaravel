
@extends('layouts.app')

@section('content')
<div class="container">
Editar datos del alumno

<form  action="{{ url('/alumno/' . $alumno->id ) }}"  method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')

    @include('alumno._field', ['modo' => 'Editar'])

    
</form>

</div>
@endsection