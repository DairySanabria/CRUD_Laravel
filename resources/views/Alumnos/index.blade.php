@extends('layouts.app')

@section('content')

<div class='container'>
	
	<h1>Pantalla de Alumnos</h1>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula de Identidad</th>
       <th scope="col">Dirección</th>
      <th scope="col">Correo Electronico</th>
    </tr>
  </thead>
  <tbody>
    
    

      @foreach($alumnos as $estudiante)
<tr>
      <th scope="row">{{$estudiante->id}}</th>
      <td>{{$estudiante->nombre}}</td>
      <td>{{$estudiante->apellido}}</td>
      <td>{{$estudiante->cedula}}</td>
       <td>{{$estudiante->direccion}}</td>
      <td>{{$estudiante->correo_electronico}}</td>
    </tr>  
      @endforeach

  

    
  </tbody>
</table>

  {{  $alumnos->links()  }}


</div>
@endsection