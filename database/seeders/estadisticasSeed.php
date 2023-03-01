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
            'visitasPeriodo'=>250000,
            'ventasPeriodo'=>20000000,
            'inicioPeriodo'=>'2023/01/28',
            'finPeriodo'=>'2023/02/28',
        ]);
    }
}
