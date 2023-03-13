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
            'fecha_ini'=>"2023/01/28 00:00",
            'fecha_fin'=>"2023/02/10 12:00",
            'costo'=>"100.000",
            'num_adulto'=>4,
            'num_nino'=>3,
            'estado'=>'Consumida',
            'id_usuario_cliente'=>1,
        ]);

        reservaciones::create([
            'fecha_ini'=>"2023/02/28 13:00",
            'fecha_fin'=>"2023/03/01 13:00",
            'costo'=>"14.000",
            'num_adulto'=>4,
            'num_nino'=>3,
            'estado'=>'Activa',
            'id_usuario_cliente'=>1,
        ]);

        reservaciones::create([
            'fecha_ini'=>"2023/02/28 13:00",
            'fecha_fin'=>"2023/03/01 13:00",
            'costo'=>"100000",
            'num_adulto'=>4,
            'num_nino'=>0,
            'estado'=>'Activa',
            'id_usuario_cliente'=>2,
        ]);
    }
}
