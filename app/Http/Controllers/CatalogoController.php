<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App;
use App\Movie;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller {
    
    public function Index()	{
		$movies=App\Movie::all();
		return view('catalogo.index', compact('movies'));
	}
	
	public function Show($id) {
		$encontrado=App\Movie::findOrFail($id);
		return view('catalogo.show', compact('encontrado'));
	}

	public function Create(Request $request) {
		return view('catalogo.create');
	}

	public function Edit($id) {
		$encontrado=App\Movie::findOrFail($id);
		return view('catalogo.edit',compact ('encontrado'));
	}

	public function Login() {
		return view ('auth.login');
	}

	public function Logout() {
		return "Cerrar Session Usuarios";
	}

	public function Save(Request $request) {
		/*
		FALTA HACER
		Verificar que los campos se ingresaron correctamente
		*/
		$nueva=new movie;
		$nueva->title=$request->title;
		$nueva->year=$request->year;
		$nueva->director=$request->director;
		$nueva->poster=$request->poster;
		$nueva->synopsis=$request->synopsis;
		$nueva->save();
		flash('Guardado con éxito')->success();
		return redirect('catalogo');
	}

	public function Update(Request $request, $id) {
		$encontrado=App\Movie::findOrFail($id);
		$encontrado->title=$request->title;
		$encontrado->year=$request->year;
		$encontrado->director=$request->director;
		$encontrado->poster=$request->poster;
		$encontrado->synopsis=$request->synopsis;
		$encontrado->save();
		flash('Modificado con éxito')->success();
		return view('catalogo.show', compact('encontrado'));
	}

	public function Rent($id) {
		$encontrado=App\Movie::findOrFail($id);
		$encontrado->rented=true;
		$encontrado->save();
		flash('Película alquilada')->success();
		return view('catalogo.show', compact('encontrado'));
	}

	public function Return($id) {
		$encontrado=App\Movie::findOrFail($id);
		$encontrado->rented=false;
		$encontrado->save();
		flash('Película devuelta')->success();
		return view('catalogo.show', compact('encontrado'));
	}

	public function Delete($id) {
		$encontrado=App\Movie::findOrFail($id);
		$encontrado->delete();
		flash('Película eliminada')->success();
		return redirect('catalogo');
	}

}//llave final