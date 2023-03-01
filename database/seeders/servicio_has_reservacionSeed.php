<?php

namespace Database\Seeders;

use App\Models\servicio_has_reservacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class servicio_has_reservacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        servicio_has_reservacion::create([
            'id_servicio'=>1,
            'id_reserva'=>1,
        ]);

        servicio_has_reservacion::create([
            'id_servicio'=>2,
            'id_reserva'=>2,
        ]);
    }
}
