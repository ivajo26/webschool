<?php namespace Webschool\Http\Requests;

use Webschool\Http\Requests\Request;

class AsignaturaUpdateRequest extends Request {

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
			'nombre_asignatura' => 'required'
		];
	}

}
