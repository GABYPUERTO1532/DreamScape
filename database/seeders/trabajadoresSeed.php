<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\trabajadores;

class trabajadoresSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        trabajadores::create([
            'nombre'=>"Sandra Gabriela Puerto Rojas",
            'tip_doc'=>"Cedula de Ciudadania",
            'num_doc'=>"0000000000",
            'num_tel'=>"3007410404",
            'sex_genero'=>"Femenino",
            'fech_nac'=>"2006/02/03",
            'url_foto'=>"url",
        ]);

        trabajadores::create([
            'nombre'=>"Julián David Lazo Torres ",
            'tip_doc'=>"Cedula de Ciudadania",
            'num_doc'=>"3333333333",
            'num_tel'=>"3153020947",
            'sex_genero'=>"Masculino",
            'fech_nac'=>date("Y-m-d H:i:s"),
            'url_foto'=>"url_4",
        ]);

        trabajadores::create([
            'nombre'=>"Valentina Beltran Sanchez",
            'tip_doc'=>"Cedula de Ciudadania",
            'num_doc'=>"1111111111",
            'num_tel'=>"3174559584",
            'sex_genero'=>"Femenino",
            'fech_nac'=>date("Y-m-d H:i:s"),
            'url_foto'=>"url_2",
        ]);

        trabajadores::create([
            'nombre'=>"Thomas Morales Gutiérrez",
            'tip_doc'=>"Cedula de Ciudadania",
            'num_doc'=>"2222222222",
            'num_tel'=>"3154525704",
            'sex_genero'=>"Masculino",
            'fech_nac'=>date("Y-m-d H:i:s"),
            'url_foto'=>"url_3",
        ]);

    }
}
