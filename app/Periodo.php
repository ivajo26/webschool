<?php namespace Webschool;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model {

	protected $fillable = ['taller','quiz','parcial','nota_final'];

}
