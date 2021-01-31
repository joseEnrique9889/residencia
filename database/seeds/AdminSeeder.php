<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $useradmin= User::create([
       	'role'=> '1',
    	'name' 	   => 'Encargado',
    	'a_Paterno' => 'encargado',
    	'a_Materno' => 'encargado',
    	'control'=> '10101010',
      	'Cuatri' => '0',
        'email'	   => 'supervisor@admin.com',
        'password' => Hash::make('SigamecaT2020')

    	]);
    }
}
