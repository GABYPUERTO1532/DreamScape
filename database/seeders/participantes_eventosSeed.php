<?php

namespace Database\Seeders;

use App\Models\participantes_eventos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class participantes_eventosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        participantes_eventos::create([
            'nombre'=>'Luis Fernando Alonso',
            'tip_doc'=>'Cedula de Ciudadania',
            'num_doc'=>'5555555555',
            'sex_genero'=>'Masculino',
            'id_reserva'=>1,
        ]);
    }
}
