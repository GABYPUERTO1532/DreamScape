<?php

namespace Database\Seeders;

use App\Models\tipo_espacios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tipo_espaciosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tipo_espacios::create([
            'nombre'=>'Oficina',
            'descripcion'=>'Oficina Empresarial para reuniones simples',
            'max_personas'=>4,
            'costo'=>"250000"
        ]);

        tipo_espacios::create([
            'nombre'=>'Sala Eventos',
            'descripcion'=>'Salas para reuniones empresariales o personales',
            'max_personas'=>4,
            'costo'=>"250000"
        ]);
    }
}
