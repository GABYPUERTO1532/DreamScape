<?php

namespace Database\Seeders;

use App\Models\services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class servicesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        services::create([
            'name'=>"Desayuno",
            'description'=>"Desayuno Listo"
        ]);

        services::create([
            'name'=>"Cena",
            'description'=>"Cena Lista"
        ]);
    }
}
