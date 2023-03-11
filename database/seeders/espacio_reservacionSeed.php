<?php

namespace Database\Seeders;

use App\Models\espacio_reservacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class espacio_reservacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        espacio_reservacion::create([
            'id_reservacion'=>2,
            'id_espacio'=>1
        ]);

        espacio_reservacion::create([
            'id_reservacion'=>2,
            'id_espacio'=>3
        ]);
    }
}
