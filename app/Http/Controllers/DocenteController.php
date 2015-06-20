<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Database\Query\Builder;

use Webschool\AsignacionDocenteAsignatura;

use Illuminate\Contracts\Auth\Guard;

class DocenteController extends Controller {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}

	public function getCursos(){

		$todo = AsignacionDocenteAsignatura::join(
			'asignaturas', 'asignacion_docente_asignaturas.asignatura_id','=','asignaturas.id'
		)
		->where('docente_id',$this->auth->user()->identificacion)
		->get();

		return view('Docente.seleccionarMateria',['todo' => $todo]);
		
	}

}
