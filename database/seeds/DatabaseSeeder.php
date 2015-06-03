<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		$this->call('AdminTableSeeder');

		// $this->call('UserTableSeeder');
	}

}
class AdminTableSeeder extends Seeder {
	public function run(){
		\DB::table('users')->insert(array (
			'nombre' => 'User',
			'apellido' => 'Admin',
			'identificacion' => '123456789',
			'email' => 'admin@webschool.co',
			'estado' => '1',
			'password' => \Hash::make('admin'),
			'type' => 'admin'
			));
	}
}
