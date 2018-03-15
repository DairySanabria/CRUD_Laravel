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
		    
}
