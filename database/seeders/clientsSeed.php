<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\clients;

class clientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        clients::create([
            'name'=>"Pepito Perez Eduardo",
            'doc_typ'=>"Cedula de Ciudadania",
            'doc_num'=>"1111111111",
            'sex_gender'=>"Masculino",
            'pho_num'=>"0000000000"
        ]);
    }
}
