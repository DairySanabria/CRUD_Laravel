@extends('layouts.app')

@section('content')

<div class='container'>
	
	<h1>Pantalla de Profesores</h1>

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
    
    

      @foreach($profesor as $maestro)
<tr>
      <th scope="row">{{$maestro->id}}</th>
      <td>{{$maestro->nombre}}</td>
      <td>{{$maestro->apellido}}</td>
      <td>{{$maestro->cedula}}</td>
       <td>{{$maestro->direccion}}</td>
      <td>{{$maestro->correo_electronico}}</td>
    </tr>  
      @endforeach

  

    
  </tbody>
</table>

  {{  $profesor->links()  }}


</div>
@endsection