<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;  

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::Create();
        for ($i=0; $i < 50; $i++){

        	\DB::table('alumnos')->insert(array(

        		'nombre' => $faker->name,
        		'apellido' => $faker->lastName,
        		'cedula' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        		'direccion' => $faker->address,
        		'correo_electronico' => $faker->email
        	
			));


        }


    }
}
