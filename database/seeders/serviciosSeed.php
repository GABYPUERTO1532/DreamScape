<?php

namespace Database\Seeders;

use App\Models\servicios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class serviciosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        servicios::create([
            'nombre'=>"Desayuno",
            'descripcion'=>"Desayuno Listo"
        ]);

        servicios::create([
            'nombre'=>"Cena",
            'descripcion'=>"Cena Lista"
        ]);
    }
}
