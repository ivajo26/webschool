<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Webschool\User;
use Webschool\Grado;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}


}

class UserTableSeeder extends Seeder {

	public function run(){
		DB::table('users')->delete();

		User::create([
			'nombre' => 'WebSchool',
			'apellido' => 'Admin',
			'identificacion' => '123456789',
			'email' => 'admin@webschool.co',
			'estado' => true,
			'password' => bcrypt('admin123'),
			'type' => 'admin',
			'edad' => '22',
			'genero' => 'masculino'
		]);

		Grado::create([
			'grado' => '1'
		]);
		Grado::create([
			'grado' => '2'
		]);
		Grado::create([
			'grado' => '3'
		]);
		Grado::create([
			'grado' => '4'
		]);
		Grado::create([
			'grado' => '5'
		]);
		Grado::create([
			'grado' => '6'
		]);
		Grado::create([
			'grado' => '7'
		]);
		Grado::create([
			'grado' => '8'
		]);
		Grado::create([
			'grado' => '9'
		]);
		Grado::create([
			'grado' => '10'
		]);
		Grado::create([
			'grado' => '11'
		]);
	}

}
