@extends('layouts.app')

@section('content')

<div class='container'>
	
	<h1>Pantalla de Alumnos</h1>
  <a class="btn btn-primary" href = "{{url('/formulario/alumnos')}}"> Nuevo Alumno </a>

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
    
    @if(!empty($alumnos))

              @foreach($alumnos as $estudiante)
                  <tr>
                        <th scope="row">{{$estudiante->id}}</th>
                        <td>{{$estudiante->nombre}}</td>
                        <td>{{$estudiante->apellido}}</td>
                        <td>{{$estudiante->cedula}}</td>
                        <td>{{$estudiante->direccion}}</td>
                        <td>{{$estudiante->correo_electronico}}</td>
                        <td><a href = "{{ url('/formulario/alumno/edit', $estudiante->id)}}" >Editar</a></td>
                        <td><a href = "{{url('/alumno/elimina', $estudiante->id)}}" >Eliminar</a></td>
                      </tr>  
              @endforeach
    @else

    <tr><td>Esta vacio</td></tr>
  @endif

    
  </tbody>
</table>

  {{  $alumnos->links()  }}


</div>
@endsection