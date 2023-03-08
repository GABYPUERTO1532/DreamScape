<?php

namespace Database\Seeders;

use App\Models\servicio_reservacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class servicio_reservacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        servicio_reservacion::create([
            'id_servicio'=>1,
            'id_reservacion'=>1,
        ]);

        servicio_reservacion::create([
            'id_servicio'=>2,
            'id_reservacion'=>2,
        ]);
    }
}
