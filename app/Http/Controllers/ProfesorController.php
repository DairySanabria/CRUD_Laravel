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
}