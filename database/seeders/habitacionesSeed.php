<?php

namespace Database\Seeders;

use App\Models\habitaciones;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class habitacionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        habitaciones::create([
            'codigo'=>"101A",
            'id_tipo_habitacion'=>1
        ]);

        habitaciones::create([
            'codigo'=>"201A",
            'id_tipo_habitacion'=>2
        ]);
    }
}
