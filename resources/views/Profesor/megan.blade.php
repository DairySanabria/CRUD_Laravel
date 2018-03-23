@extends('layouts.app')

@section('content')

<div class='container'>

	<h1>Pantalla de Profesores</h1>
  <a class="btn btn-primary" href = "{{url('/formulario/profesores')}}"> Nuevo Profesor </a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Cedula de Identidad</th>
       <th scope="col">Dirección</th>
      <th scope="col">Correo Electronico</th>
      <th colspan = "2" style ="text-align:center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    
  @if(!empty($profesor))  

      @foreach($profesor as $maestro)
<tr>
      <th scope="row">{{$maestro->id}}</th>
      <td>{{$maestro->nombre}}</td>
      <td>{{$maestro->apellido}}</td>
      <td>{{$maestro->cedula}}</td>
       <td>{{$maestro->direccion}}</td>
      <td>{{$maestro->correo_electronico}}</td>
      <td><a href = "{{ url('/formulario/profe/edita', $maestro->id)}}" >Editar</a></td>
      <td><a href = "{{url('/profe/elimina', $maestro->id)}}" >Eliminar</a></td>
    </tr>  
      @endforeach

@else

      <tr><td>Esta vacio</td></tr>
@endif  

    
  </tbody>
</table>

  {{  $profesor->links()  }}


</div>
@endsection