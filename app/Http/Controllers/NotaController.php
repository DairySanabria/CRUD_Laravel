<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
   
		public function index()
		{
			$notas = Nota::all();

			return view('Notas.sol', compact('notas'));
		}

}


