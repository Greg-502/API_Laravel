<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
          [
	        	'nombre' => 'Alex Oscar',
	        	'apellido_paterno' => 'Gamarra',
	        	'apellido_materno' => 'Solis',
	        	'nacimiento' => '2000-02-20',
	        	'genero' => 'M',
	        	'dni' => 7021851138483,
	        	'sangre' => 'A+',
	        	'teléfono' => 94312435,
	        	'correo' => 'alex@gmail.com',
	        	'direccion' => 'Jr. Ramón Castilla 110',
						'status' => true
        	],
        	[
	        	'nombre' => 'María Perla',
	        	'apellido_paterno' => 'Saruc',
	        	'apellido_materno' => 'Main',
	        	'nacimiento' => '1987-03-18',
	        	'genero' => 'F',
	        	'dni' => 8021852294857,
	        	'sangre' => 'A-',
	        	'teléfono' => 95231243,
	        	'correo' => 'maria@gmail.com',
	        	'direccion' => 'Jr. Manuel Ruíz 230',
						'status' => true
        	],
        	[
	        	'nombre' => 'Julio Ramón',
	        	'apellido_paterno' => 'Quiroga',
	        	'apellido_materno' => 'Hasher',
	        	'nacimiento' => '1976-10-10',
	        	'genero' => 'm',
	        	'dni' => 2321991394582,
	        	'sangre' => 'A+',
	        	'teléfono' => 97712333,
	        	'correo' => 'julio@gmail.com',
	        	'direccion' => 'Jr. Enrique Palacios 202',
						'status' => true
        	],
        	[
        		'nombre' => 'Mario Idalgo',
						'apellido_paterno' => 'Cuerbo',
						'apellido_materno' => 'Nieto',
						'nacimiento' => '2011-09-17',
						'genero' => 'm',
						'dni' => 8021851184921,
						'sangre' => 'B+',
						'teléfono' => 93211235,
						'correo' => 'mario@gmail.com',
						'direccion' => 'Jr. Manuel Ruiz 800',
						'status' => true
        	],
        	[
        		'nombre' => 'María Rosa',
        		'apellido_paterno' => 'Jara',
        		'apellido_materno' => 'Uri',
						'nacimiento' => '2019-08-12',
						'genero' => 'F',
						'dni' => 6221577784938,
						'sangre' => 'AB+',
						'teléfono' => 95177435,
						'correo' => 'maría@gmail.com',
						'direccion' => 'Jr. Ramón Castilla 401',
						'status' => true
        	],
        	[
        		'nombre' => 'Kevin Juan',
						'apellido_paterno' => 'Rodriguez',
						'apellido_materno' => 'Ezquivel',
						'nacimiento' => '1955-12-19',
						'genero' => 'm',
						'dni' => 7821855583298,
						'sangre' => 'A+',
						'teléfono' => 93499435,
						'correo' => 'kevin@gmail.com',
						'direccion' => 'Jr. Alfonso Ugarte 2020',
						'status' => false
        	],
        	[
        		'nombre' => 'Cielo Celeste',
						'apellido_paterno' => 'Lázaro',
						'apellido_materno' => 'Peterson',
						'nacimiento' => '2021-01-07',
						'genero' => 'F',
						'dni' => 2388859149302,
						'sangre' => 'A-',
						'teléfono' => 97166115,
						'correo' => 'cielo@gmail.com',
						'direccion' => 'Jr. Francisco Bolognesi',
						'status' => false
        	]
        ]);
    }
}
