<?php namespace webschool;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';
	protected $fillable = ['nombre', 'estado'];

}
