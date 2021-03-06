<?php namespace Webschool\Http\Requests;

use Webschool\Http\Requests\Request;

class UserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre' => 'required',
			'apellido' => 'required',
			'identificacion' => 'required|unique:users',
			'email' => 'required',
			'password' => 'required',
			'type' => 'required',
			'genero' => 'required',
			'edad' => 'required'
		];
	}

}
