<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'fullname'	=>	'Jeremias Springfield',
			'email'	    =>	'jeremias@gmail.com',
			'phone'	    =>	322314589,
			'birthdate' =>  '1958-11-12',
			'gender'	=>	'Male',
			'address'	=>	'Street Siempre Viva',
			'role'		=>	'Admin',
			'password'	=>	bcrypt('Admin'),
		]);

		$user = new App\User;
		$user->fullname = 'Bryan Cañas';
		$user->email 	= 'bscanas2@misena.edu.co';
		$user->phone	= 3127310300;
		$user->birthdate= '1997-08-31';
		$user->gender 	= 'Male';
		$user->address 	= 'bombay 3';
		$user->role 	= 'Admin';
		$user->password = bcrypt('admin');
		$user->save();

		// Factory
		factory(App\User::class, 50)->create();


    }
}
