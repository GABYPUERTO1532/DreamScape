<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\habitacion_has_reservacion;

class habitacion_has_reservacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        habitacion_has_reservacion::create([
            'id_habitacion'=>1,
            'id_reserva'=>1,
        ]);

        habitacion_has_reservacion::create([
            'id_habitacion'=>2,
            'id_reserva'=>2,
        ]);
    }
}
