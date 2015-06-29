<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;
use Webschool\Http\Requests\SearchRequest;
use Webschool\Http\Requests\DocenteSearchRequest;
use Illuminate\Http\Request;

use Webschool\User;
use Webschool\Asignatura;
use Webschool\AsignacionDocenteAsignatura;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Query\Builder;

class SearchController extends Controller {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}


	//----------------- BUSQUEDA ADMIN ----------------------//

	public function postSearch(SearchRequest $request){
		$search = $request->input('search');
		$result = User::where('apellido','LIKE',"%$search%")->orWhere('identificacion','LIKE',"%$search%")->get();
		if (!$result->isEmpty()) {
			return view('Admin.getSearched',['search' => $result]);
		}else{
			return view('Admin.index',['error' => 'User Not Found']);
		}
		
	}

	//----------------- BUSQUEDA DOCENTE ----------------------//

	public function postMateriaSearch(DocenteSearchRequest $request){
		$materia = $request->input('nombre_materia');
		$id = $this->auth->user()->identificacion;

		$materias = Asignatura::join(
			'asignacion_docente_asignaturas', 'asignaturas.id', '=' , 'asignacion_docente_asignaturas.asignatura_id'
		)
		->where('nombre_asignatura','LIKE',"%$materia%")
		->where('docente_id',$id)
		->get();
		return view('Docente.searchMaterias',['materias' => $materias]);


	}



}
