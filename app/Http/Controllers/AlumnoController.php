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

			public function show($id)
			{
				//dd($id);

				$buscar = Alumno::find($id);
				//dd($buscar);
				//return $buscar; 
				//var_dump ($buscar);
				//print_r ($buscar);

				return view('Alumnos.edit', compact('buscar'));

			}

			public function update($id, Request $log) 
			{

				$updates = Alumno::find($id);
				$updates->nombre = $log->input('nombre');

				$updates->apellido = $log->input('apellido');

				$updates->cedula = $log->input('cedula');

				$updates->correo_electronico = $log->input('email');

				$updates->direccion = $log->input('direccion');

				$updates->save();

				return redirect()->to('/alumnos');

			}

			public function destroy($id)
			{
				//dd($id);
				$deletes = Alumno::find($id);
				$deletes->delete();

				return redirect()->back();


			}

}


