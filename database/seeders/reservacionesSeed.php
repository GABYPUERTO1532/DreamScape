<?php

namespace Database\Seeders;

use App\Models\reservaciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reservacionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reservaciones::create([
            'fechaInicio'=>"2023/01/28 00:00",
            'fechaFin'=>"2023/02/10 12:00",
            'precio'=>"100.000",
            'numAdulto'=>4,
            'numNino'=>3,
            'estado'=>'Consumida',
            'id_cliente'=>1,
        ]);

        reservaciones::create([
            'fechaInicio'=>"2023/02/28 13:00",
            'fechaFin'=>"2023/03/01 13:00",
            'precio'=>"14.000",
            'numAdulto'=>4,
            'numNino'=>3,
            'estado'=>'Activa',
            'id_cliente'=>1,
        ]);
    }
}
