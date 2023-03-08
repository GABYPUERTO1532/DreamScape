<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\clientes;

class clientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clientes::create([
            'nombre'=>"Pepito Perez Eduardo",
            'tip_doc'=>"Cedula de Ciudadania",
            'num_doc'=>"1111111111",
            'sex_genero'=>"Masculino",
            'num_tel'=>"0000000000"
        ]);
    }
}
