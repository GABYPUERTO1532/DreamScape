<?php

namespace Database\Seeders;

use App\Models\pqrs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pqrsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pqrs::create([
            'tipo'=>"Comentario",
            'descripcion'=>'Me encanto su servicio',
            'id_cliente'=>1,
        ]);
    }
}
