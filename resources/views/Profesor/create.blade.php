@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{url('/formulario/profesores')}}" method="post">

        {{csrf_field()}} <!--Token para formularios con peticiones post -->


        <div class="form-row">
                <div class="form-group col-md-6">
                <label for="NombreProfe">Nombre del Profesor</label>
                <input name="nombre" type="text" class="form-control" id="NombreProfe" placeholder="">
                </div>

                        <div class="form-group col-md-6">
                        <label for="ApellidoProfe">Apellido del Profesor</label>
                        <input name="apellido" type="text" class="form-control" id="ApellidoProfe" placeholder="">
                        </div>

                            <div class="form-group col-md-6">
                            <label for="Documento">Cedula de Identidad</label>
                            <input name="cedula"   type="text" class="form-control" id="Documento" placeholder="">
                            </div>

                                <div class="form-group col-md-6">
                                <label for="CorreoElec">Email del Profesor</label>
                                <input name="email"  type="email" class="form-control" id="CorreoElec" placeholder="">
                                </div>

        
                                       
        </div>
                

                                    <div class="form-group">
                                    <label for="inputAddress">Direccion del Profesor</label>
                                    <input name="direccion"   type="text" class="form-control" id="inputAddress" placeholder="">
                                    </div>

         <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>


@endsection