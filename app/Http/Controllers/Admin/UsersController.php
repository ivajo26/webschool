<?php namespace webschool\Http\Controllers\Admin;

use webschool\Http\Requests;
use webschool\Http\Requests\UserRequest;
//use webschool\Http\Requests\SearchRequest;
use webschool\Http\Requests\AsignaturaRequest;
use webschool\Http\Controllers\Controller;

use Illuminate\Http\Request;
use webschool\User;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('admin.user.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($type)
	{
		switch ($type) {
			case 'alumno':
				return view('admin.user.addForm',['type'=>'alumno']);
			case 'docente':
				return view('admin.user.addForm',['type'=>'docente']);
			case 'admin':
				return view('admin.user.addForm',['type'=>'admin']);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		User::create($request->all());
		return view('admin.user.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
