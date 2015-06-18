<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Webschool\User;

class UserTableSeeder extends Seeder {

	public function run(){
		DB::table('users')->delete();

		User::create([
			'nombre' => 'Deyby',
			'apellido' => 'Garcia',
			'identificacion' => '1067953928',
			'email' => 'dgarcia@devhunter.co',
			'estado' => true,
			'password' => bcrypt('deyby123'),
			'type' => 'admin'
		]);

		User::create([
			'nombre' => 'Carlos',
			'apellido' => 'Escobar',
			'identificacion' => '1067943920',
			'email' => 'cescobar@devhunter.co',
			'estado' => true,
			'password' => bcrypt('carlos123'),
			'type' => 'docente'
		]);

		User::create([
			'nombre' => 'Ivan',
			'apellido' => 'Diaz',
			'identificacion' => '123456789',
			'email' => 'idiaz@devhunter.co',
			'estado' => true,
			'password' => bcrypt('ivan123'),
			'type' => 'alumno'
		]);
	}

}
