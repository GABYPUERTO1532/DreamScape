<?php

namespace Database\Seeders;

use App\Models\categorias_registros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorias_registrosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorias_registros::create([
            'nombre'=>'limpieza',
            'descripcion'=>'articulos para aseo general'
        ]);

        categorias_registros::create([
            'nombre'=>'seguidad',
            'descripcion'=>'articulos de seguridad'
        ]);

        categorias_registros::create([
            'nombre'=>'ingreso reservaciones',
            'descripcion'=>'Ingreso mensual por reservaciones'
        ]);
    }
}
