<?php namespace Webschool;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model {

	protected $fillable = ['ada_id','periodo_1','periodo_2','periodo_3','nota_final','estudiante_id'];

}
