@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{url('/formulario/alumno')}}" method="post">

        {{csrf_field()}} <!--Token para formularios con peticiones post -->

        <div class="form-row">
                <div class="form-group col-md-6">
                <label for="Nombrealum">Nombre del Alumno</label>
                <input name="nombre" type="text" class="form-control" id="Nombrealum" placeholder="">
                </div>

                        <div class="form-group col-md-6">
                        <label for="Apellidoalum">Apellido del Alumno</label>
                        <input name="apellido"  type="text" class="form-control" id="Apellidoalum" placeholder="">
                        </div>

                            <div class="form-group col-md-6">
                            <label for="Documento">Cedula de Identidad</label>
                            <input name="cedula" type="text" class="form-control" id="Documento" placeholder="">
                            </div>

                                <div class="form-group col-md-6">
                                <label for="inputEmail4">Email del Alumno</label>
                                <input name="email"  type="email" class="form-control" id="inputEmail4" placeholder="">
                                </div>

        
                                       
        </div>
                

                                    <div class="form-group">
                                    <label for="inputAddress">Direccion del Alumno</label>
                                    <input name="direccion"  type="text" class="form-control" id="inputAddress" placeholder="">
                                    </div>

         <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>


@endsection