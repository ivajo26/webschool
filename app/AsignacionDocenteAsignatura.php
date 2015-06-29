<?php namespace Webschool;

use Illuminate\Database\Eloquent\Model;

class AsignacionDocenteAsignatura extends Model {

	protected $fillable = ['asignatura_id','docente_id','grado_id'];

}
