<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Forma manual de introducir un registro
    	/*
        DB::table('users')->insert([
        	'name' 		=> 'Jancarlos Alarcon',
        	'email'		=> 'jancarlosalarcon@gmail.com',
        	'password' 	=> bcrypt('123456'),
        	'type'		=> 'admin'
        ]);
        */
        //Forma aleatoria para introducir registros con el Factory
        factory(User::class, 10)->create();
    }
}
