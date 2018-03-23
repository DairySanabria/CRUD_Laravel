<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesorController extends Controller
{
    
		public function index()
		{
			$profesor = Profesor::paginate(5);

			return view('Profesor.megan', compact('profesor'));
		}

				public function create()
				{
					return view('Profesor.create');
				}


					public function store(Request $dato)
					{

						$profesor = new Profesor();
						$profesor->nombre = $dato->input('nombre');
						$profesor->apellido = $dato->input('apellido');
						$profesor->cedula = $dato->input('cedula');
						$profesor->correo_electronico = $dato->input('email');
						$profesor->direccion = $dato->input('direccion');

						$profesor->save();

						return redirect()->to('/profesor');

					}

					public function show($id)
					{
						//dd($id);
		
						$buscar = Profesor::find($id);
						//dd($buscar);
						//return $buscar; 
						//var_dump ($buscar);
						//print_r ($buscar);
		
						return view('Profesor.edita', compact('buscar'));
		
					}
		
					public function update($id, Request $log) 
					{
		
						$updates = Profesor::find($id);
						$updates->nombre = $log->input('nombre');
		
						$updates->apellido = $log->input('apellido');
		
						$updates->cedula = $log->input('cedula');
		
						$updates->correo_electronico = $log->input('email');
		
						$updates->direccion = $log->input('direccion');
		
						$updates->save();
		
						return redirect()->to('/profesor');
		
					}
		
					public function destroy($id)
					{
						//dd($id);
						$deletes = Profesor::find($id);
						$deletes->delete();
		
						return redirect()->back();
		
		
					}

}