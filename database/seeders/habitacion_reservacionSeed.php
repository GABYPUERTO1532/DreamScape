<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\habitacion_reservacion;

class habitacion_reservacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        habitacion_reservacion::create([
            'id_habitacion'=>1,
            'id_reservacion'=>1,
        ]);

        habitacion_reservacion::create([
            'id_habitacion'=>2,
            'id_reservacion'=>2,
        ]);
    }
}
