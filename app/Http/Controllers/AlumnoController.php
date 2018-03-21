<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
		 
		    public function index() 
		    {
		    	//dd('Funciona'); Para la comprobacion de rutas
				
		    		$alumnos = Alumno::paginate(5);

					return view('Alumnos.index', compact('alumnos'));

			}
			
			public function create()
			{
				return view('Alumnos.create');
			}

			public function store(Request $info)
			{

				//dd($info->all());

				$alumnos = new Alumno();
				
				$alumnos->nombre = $info->input('nombre');

				$alumnos->apellido = $info->input('apellido');

				$alumnos->cedula = $info->input('cedula');

				$alumnos->correo_electronico = $info->input('email');

				$alumnos->direccion = $info->input('direccion');

				$alumnos->save();

				return redirect()->to('/alumnos');
 
				//return view('Alumnos.index');



				





			}		    





}


