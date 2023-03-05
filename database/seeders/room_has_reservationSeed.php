<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\room_has_reservation;

class room_has_reservationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        room_has_reservation::create([
            'id_room'=>1,
            'id_reservation'=>1,
        ]);

        room_has_reservation::create([
            'id_room'=>2,
            'id_reservation'=>2,
        ]);
    }
}
