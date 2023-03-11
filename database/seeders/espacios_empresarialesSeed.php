<?php

namespace Database\Seeders;

use App\Models\espacios_empresariales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class espacios_empresarialesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        espacios_empresariales::create([
            'codigo'=>'401',
            'id_tipo_espacio'=>1
        ]);

        espacios_empresariales::create([
            'codigo'=>'402',
            'id_tipo_espacio'=>1
        ]);

        espacios_empresariales::create([
            'codigo'=>'403',
            'id_tipo_espacio'=>2
        ]);

        espacios_empresariales::create([
            'codigo'=>'404',
            'id_tipo_espacio'=>2
        ]);
    }
}
