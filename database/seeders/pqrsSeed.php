<?php

namespace Database\Seeders;

use App\Models\pqrs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pqrsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pqrs::create([
            'type'=>"Comentario",
            'description'=>'Me encanto su servicio',
            'id_user_client'=>1,
        ]);
    }
}
