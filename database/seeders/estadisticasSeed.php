<?php

namespace Database\Seeders;

use App\Models\estadisticas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class estadisticasSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        estadisticas::create([
            'visitas'=>250000,
            'ventas'=>20000000,
            'ini_periodo'=>'2023/01/28',
            'fin_periodo'=>'2023/02/28',
        ]);
    }
}
