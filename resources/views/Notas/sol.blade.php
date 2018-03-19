@extends('layouts.app')

@section('content')

<div class='container'>
	
	<h1>Pantalla de Notas</h1>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Alumno</th>
      <th scope="col">Calificaciones</th>
    </tr>
  </thead>
  <tbody>
  
   
    @if ( count($notas) == 0 )
    <tr>
        <td>No hay Registros Guardados</td>
    </tr>
       
    @else
    
    @foreach($notas as $puntos)
                <tr>
                <th scope="row">{{$puntos->id}}</th>
                <td>{{$puntos->alumno_id}}</td>
                <td>{{$puntos->calificaciones}}</td>

                </tr>  
            @endforeach
       
    @endif
   

    
  </tbody>
</table>

</div>
@endsection