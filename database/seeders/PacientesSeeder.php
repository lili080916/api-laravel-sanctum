<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesSeeder extends Seeder
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
                'nombre' => 'Liliana',
                'apellidos' => 'Juez Aldana',
                'edad' => '34',
                'sexo' => 'Femenino',
                'dni' => 'Y8434666',
                'tipo_sangre' => 'O+',
                'telefono' => '672508591',
                'correo' => 'lili@gmail.com',
                'direccion' => 'Miguel Bravo 2'
            ],
            [
                'nombre' => 'Juana',
                'apellidos' => 'Perez Perez',
                'edad' => '25',
                'sexo' => 'Femenino',
                'dni' => 'J8438876',
                'tipo_sangre' => 'O+',
                'telefono' => '678451591',
                'correo' => 'juana20@gmail.com',
                'direccion' => 'Calvo Sotelo 2'
            ],
            [
                'nombre' => 'Andres',
                'apellidos' => 'Fuentes',
                'edad' => '30',
                'sexo' => 'Masculino',
                'dni' => 'M8400666',
                'tipo_sangre' => 'O-',
                'telefono' => '672508591',
                'correo' => 'andres2020@gmail.com',
                'direccion' => 'Guevara 10'
            ]
        ]);
    }
}
