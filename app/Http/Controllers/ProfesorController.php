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



}