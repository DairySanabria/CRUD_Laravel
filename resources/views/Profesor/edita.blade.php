@extends('layouts.app')

@section('content')

<div class="container"><h1>Actualizando Profesores</h1>


<form action="{{url('/profe/actual', $buscar->id)}}" method="put">

        {{csrf_field()}} <!--Token para formularios con peticiones post -->

        <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Nombreprofe">Nombre del Profesor</label>
                <input name="nombre" value="{{$buscar->nombre}}" type="text" class="form-control" id="Nombreprofe" placeholder="">
                </div>

                        <div class="form-group col-md-6">
                        <label for="Apellidoprofe">Apellido del Profesor</label>
                        <input name="apellido" value="{{$buscar->apellido}}" type="text" class="form-control" id="Apellidoprofe" placeholder="">
                        </div>

                            <div class="form-group col-md-6">
                            <label for="Documento">Cedula de Identidad</label>
                            <input name="cedula" value="{{$buscar->cedula}}" type="text" class="form-control" id="Documento" placeholder="">
                            </div>

                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email del Profesor</label>
                                <input name="email" value="{{$buscar->correo_electronico}}" type="email" class="form-control" id="inputEmail4" placeholder="">
                                </div>

        
                                       
        </div>
                

                                    <div class="form-group">
                                    <label for="inputAddress">Direccion del Profesor</label>
                                    <input name="direccion" value="{{$buscar->direccion}}" type="text" class="form-control" id="inputAddress" placeholder="">
                                    </div>

         <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>


@endsection