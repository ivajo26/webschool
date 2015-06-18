<?php namespace Webschool\Http\Controllers;

use Webschool\Http\Requests;
use Webschool\Http\Controllers\Controller;
use Webschool\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Webschool\User;

class AdminController extends Controller {

	

	
	public function newUser($type)
	{
		switch ($type) {
			case 'alumno':
				return view('Admin.newUser',['type' => 'alumno']);
				break;
			case 'docente':
				return view('Admin.newUser',['type' => 'docente']);
				break;
	
		}
	}

	public function postStoreUser(UserRequest $request){
		User::create($request->all());
		return redirect('/');
	}

}