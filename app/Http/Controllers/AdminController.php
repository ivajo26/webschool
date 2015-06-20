<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;
use Webschool\Http\Requests\UserRequest;
use Webschool\Http\Requests\AsignaturaRequest;
use Webschool\Http\Requests\EstudianteRequest;
use Webschool\Http\Requests\AsignacionCargasRequest;
use Webschool\Http\Requests\AsignaturaUpdateRequest;
use Webschool\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use Webschool\User;
use Webschool\Asignatura;
use Webschool\Docente;
use Webschool\Estudiante;
use Webschool\Grado;
use Webschool\AsignacionDocenteAsignatura;

class AdminController extends Controller {

	// ------------ USUARIOS --------------------

	public function asignarEstudiante(){
		$cursos = Grado::all();

		$users = User::where('type','estudiante')->get();

		$cursosA = array();
		$usersA = array();

		foreach ($cursos as $key) {
			$cursosA[$key->id] = $key->grado;
			
		}
		
		foreach ($users as $key) {
			$usersA[$key->identificacion] = $key->nombre;
		}


		return view('Admin.asignarCursos',['cursos' => $cursosA,'estudiantes' => $usersA]);
	}

	public function postAsignarEstudiante(EstudianteRequest $request){
		$user_id = $request->input('user_id');
		$grado_id = $request->input('grado_id');
		$data = array(
			'user_id' => $user_id,
			'grado_id' => $grado_id
			);
		Estudiante::create($data);
		return redirect('/asignar/estudiante');
	}


	
	public function newUser($type)
	{
		switch ($type) {
			case 'estudiante':
				return view('Admin.newUser',['type' => 'estudiante']);
			case 'docente':
				return view('Admin.newUser',['type' => 'docente']);
		}
	}

	public function postStoreUser(UserRequest $request){
		$nombre = $request->input('nombre');
		$apellido = $request->input('apellido');
		$identificacion = $request->input('identificacion');
		$email = $request->input('email');
		$password = bcrypt( $request->input('password'));
		$type = $request->input('type');
		$edad = $request->input('edad');
		$genero = $request->input('genero');

		$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'identificacion' => $identificacion,
			'email' => $email,
			'password' => $password,
			'type' => $type,
			'edad' => $edad,
			'genero' => $genero,
			);
		
		User::create($data);

		if ($type == "docente") {
			Docente::create(['user_id' => $identificacion]);
			return redirect('/asignar/cargas');
		}
		return redirect('/asignar/estudiante');
		
	}

	public function activateUser($id){
		$usuario = User::where('identificacion',$id)->first();
		if ($usuario->estado) {
			User::where('identificacion',$id)->update(['estado' => false]);
		}elseif (!$usuario->estado) {
			User::where('identificacion',$id)->update(['estado' => true]);
		}

		return redirect('/');
	}

	public function editUser($id){
		$usuario = User::where('identificacion',$id)->first();
		return view('Admin.editUsuario',['usuario' => $usuario]);
	}

	public function updateUser($id, UpdateUserRequest $request){
		$nombre = $request->input('nombre');
		$apellido = $request->input('apellido');
		$identificacion = $id;
		$email = $request->input('email');
		$type = $request->input('type');
		$edad = $request->input('edad');
		$genero = $request->input('genero');

		$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'identificacion' => $identificacion,
			'email' => $email,
			'type' => $type,
			'edad' => $edad,
			'genero' => $genero,
			);

		User::where('identificacion',$id)->update($data);

		return redirect('/');
		

	}

	//-----------------Asignaturas -------------------------------

	public function getAsignatura(){
		$asignaturas = Asignatura::orderby('estado','DESC')->get();
		return view('Admin.getAsignaturas',['asignaturas' => $asignaturas]);
	}

	public function activateAsignatura($id){
		$asignatura = Asignatura::where('id',$id)->first();
		

		if ($asignatura->estado) {
			Asignatura::where('id',$id)->update(['estado' => false]);
		}elseif (!$asignatura->estado) {
			Asignatura::where('id',$id)->update(['estado' => true]);
		}
		return redirect('/asignaturas');
	}

	public function editAsignatura($id){
		$asignaturas = Asignatura::findOrFail($id);
		return view('Admin.editAsignatura',['asignaturas' => $asignaturas]);
	}

	public function postUpdateAsignatura($id, AsignaturaUpdateRequest $request){
		$nombre = $request->input('nombre');
		Asignatura::where('id',$id)->update(['nombre' => $nombre]);
		return redirect('/asignaturas');
	}

	public function newAsignatura(){
		return view('Admin.nuevaAsignatura');
	}

	public function postNewAsignatura(AsignaturaRequest $request){
		Asignatura::create($request->all());
		return redirect('/nueva/asignatura');
	}


	public function asignarCargas(){
		$grados = Grado::all();
		$asignaturas = Asignatura::where('estado',true)->get();
		$docentes = User::where('type','docente')->get();
		$gradosA = array();
		$asignaturasA = array();
		$docentesA = array();
		foreach ($grados as $key) {
			$gradosA[$key->id] = $key->grado;
		}
		foreach ($asignaturas as $key) {
			$asignaturasA[$key->id] = $key->nombre;
		}
		foreach ($docentes as $key) {
			$docentesA[$key->identificacion] = $key->nombre.' '.$key->apellido;
		}

		return view('Admin.AsignarCargas',['grados' => $gradosA,'asignaturas' => $asignaturasA,'docentes' => $docentesA]);
	}

	public function postAsignarCargas(AsignacionCargasRequest $request){
		$docente_id = $request->input('docente_id');
		$asignatura_id = $request->input('asignatura_id');
		$grado_id = $request->input('grado_id');
		$data = array(
			'docente_id' => $docente_id,
			'asignatura_id' => $asignatura_id,
			'grado_id' => $grado_id
			); 
		AsignacionDocenteAsignatura::create($data);
		return redirect('/asignar/cargas');
	}


}