<?php

namespace Database\Seeders;

use App\Models\reservations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class reservationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reservations::create([
            'init_date'=>"2023/01/28 00:00",
            'fin_date'=>"2023/02/10 12:00",
            'cost'=>"100.000",
            'num_adult'=>4,
            'num_child'=>3,
            'status'=>'Consumida',
            'id_user_client'=>1,
        ]);

        reservations::create([
            'init_date'=>"2023/02/28 13:00",
            'fin_date'=>"2023/03/01 13:00",
            'cost'=>"14.000",
            'num_adult'=>4,
            'num_child'=>3,
            'status'=>'Activa',
            'id_user_client'=>1,
        ]);
    }
}
