<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\workers;

class workersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        workers::create([
            'name'=>"Sandra Gabriela Puerto Rojas",
            'doc_typ'=>"Cedula de Ciudadania",
            'doc_num'=>"0000000000",
            'pho_num'=>"3007410404",
            'sex_gender'=>"Femenino",
            'date_birth'=>"2006/02/03",
            'url_photo'=>"url",
        ]);

        workers::create([
            'name'=>"Julián David Lazo Torres ",
            'doc_typ'=>"Cedula de Ciudadania",
            'doc_num'=>"3333333333",
            'pho_num'=>"3153020947",
            'sex_gender'=>"Masculino",
            'date_birth'=>date("Y-m-d H:i:s"),
            'url_photo'=>"url_4",
        ]);

        workers::create([
            'name'=>"Valentina Beltran Sanchez",
            'doc_typ'=>"Cedula de Ciudadania",
            'doc_num'=>"1111111111",
            'pho_num'=>"3174559584",
            'sex_gender'=>"Femenino",
            'date_birth'=>date("Y-m-d H:i:s"),
            'url_photo'=>"url_2",
        ]);

        workers::create([
            'name'=>"Thomas Morales Gutiérrez",
            'doc_typ'=>"Cedula de Ciudadania",
            'doc_num'=>"2222222222",
            'pho_num'=>"3154525704",
            'sex_gender'=>"Masculino",
            'date_birth'=>date("Y-m-d H:i:s"),
            'url_photo'=>"url_3",
        ]);

    }
}
