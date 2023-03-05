<?php

namespace Database\Seeders;

use App\Models\service_has_reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class service_has_reservationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        service_has_reservation::create([
            'id_service'=>1,
            'id_reservation'=>1,
        ]);

        service_has_reservation::create([
            'id_service'=>2,
            'id_reservation'=>2,
        ]);
    }
}
