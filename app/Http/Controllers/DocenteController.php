<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Webschool\Http\Requests\SeleccionMateriaRequest;


use Illuminate\Database\Query\Builder;


use Webschool\Asignatura;
use Webschool\Estudiante;
use Webschool\User;
use Webschool\Nota;

use Illuminate\Contracts\Auth\Guard;

class DocenteController extends Controller {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}

	public function getCursos(){
		$todo = Asignatura::join(
			'asignacion_docente_asignaturas', 'asignaturas.id', '=', 'asignacion_docente_asignaturas.asignatura_id'
		)
		->orderBy('grado_id','ASC')
		->get();

		$id = $this->auth->user()->identificacion;

		$cargas = $todo->where('docente_id',$id);	

		return view('Docente.seleccionarMateria',['datos' => $cargas]);
		
	}

	public function postCursos(SeleccionMateriaRequest $request){

		$materia_grado = $request->input('materia_grado');
		$estudiantes = Estudiante::join('users','estudiantes.user_id','=','users.identificacion')
		->where('grado_id',$materia_grado)->get();

		$ada_id = $request->input('ada_id');

		
		
		return view('Docente.ingresarNotas',['estudiantes' => $estudiantes,'ada_id' => $ada_id,'materia_grado' => $materia_grado]);
	}

	public function postRegistrarNotas(Request $request){
		$materia_grado = $request->input('materia_grado');
		$estudiante_id = $request->input('estudiante_id');
		$ada_id = $request->input('ada_id');
		$periodo = $request->input('periodo');
		$nota = $request->input('nota');

		if ($periodo == '1') {
			Nota::create(['ada_id' => $ada_id,'estudiante_id' => $estudiante_id, 'periodo_1' => $nota]);
		}elseif ($periodo == '2') {
			Nota::where('ada_id',$ada_id)->where('estudiante_id',$estudiante_id)->update(['periodo_2' => $nota]);
		}elseif ($periodo == '3') {
			Nota::where('ada_id',$ada_id)->where('estudiante_id',$estudiante_id)->update(['periodo_3' => $nota]);
			$notas = Nota::where('ada_id',$ada_id)->where('estudiante_id',$estudiante_id)->first();


			
			$promedio = (($notas->periodo_1 + $notas->periodo_2 + $notas->periodo_3) / 3);

			Nota::where('ada_id',$ada_id)->where('estudiante_id',$estudiante_id)->update(['nota_final' => $promedio]);
		}

		$estudiantes = Estudiante::join('users','estudiantes.user_id','=','users.identificacion')
		->where('grado_id',$materia_grado)->get();
		return view('Docente.ingresarNotas',['estudiantes' => $estudiantes,'ada_id' => $ada_id,'materia_grado' => $materia_grado]);

		
	}

}
