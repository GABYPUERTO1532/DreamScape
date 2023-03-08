<?php

namespace Database\Seeders;

use App\Models\tipo_habitaciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipo_habitacionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_habitaciones::create([
            'nombre'=>'Sencilla',
            'descripcion'=>'Habitacion Sencilla',
            'max_adultos'=>'1',
            'max_ninos'=>'1'
        ]);

        tipo_habitaciones::create([
            'nombre'=>'Doble',
            'descripcion'=>'Habitacion Doble',
            'max_adultos'=>'2',
            'max_ninos'=>'2'
        ]);
    }
}
