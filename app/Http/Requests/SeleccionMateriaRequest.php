<?php namespace Webschool\Http\Requests;

use Webschool\Http\Requests\Request;

class SeleccionMateriaRequest extends Request {

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
			'materia_grado' => 'required',
			'ada_id' => 'required'
		];
	}

}
