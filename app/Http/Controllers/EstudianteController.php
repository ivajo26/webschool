<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Webschool\Estudiante;
use Webschool\Asignatura;


use Illuminate\Database\Query\Builder;
use Illuminate\Contracts\Auth\Guard;

class EstudianteController extends Controller {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
		$this->middleware('auth');
	}

	public function index(){

		$id = $this->auth->user()->identificacion;

		$user = Estudiante::join(
			'users', 'estudiantes.user_id','=','users.identificacion'
		)
		->where('user_id',$id)
		->first();

		if (!$user) {
			return view('Estudiante.index',['error' => true]);
		}else{

			$grado = $user->grado_id;

			$materias = Asignatura::join(
				'asignacion_docente_asignaturas','asignaturas.id','=','asignacion_docente_asignaturas.asignatura_id'
			)
			->join(
				'notas','asignacion_docente_asignaturas.id','=','notas.ada_id'
			)
			->where('grado_id',$grado)
			->get();

			if ($materias->isEmpty()) {
				$materias = Asignatura::join(
					'asignacion_docente_asignaturas','asignaturas.id','=','asignacion_docente_asignaturas.asignatura_id'
				)
				->get();
			}

			return view('Estudiante.index',['materias' => $materias]);
		}
	}

	public function infoAsignaturas(){
		$gradoE = Estudiante::where('user_id',$this->auth->user()->identificacion)->first();
		$gradoE = $gradoE->grado_id;
		$info = Asignatura::join(
			'asignacion_docente_asignaturas', 'asignaturas.id', '=', 'asignacion_docente_asignaturas.asignatura_id'
		)
		->join(
			'users', 'asignacion_docente_asignaturas.docente_id', '=', 'users.identificacion'
		)
		->where('grado_id',$gradoE)
		->get();
		
		return view('Estudiante.infoAsignaturas',compact('info'));
	}



}
