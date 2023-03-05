<?php

namespace Database\Seeders;

use App\Models\type_rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class type_roomSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        type_rooms::create([
            'name'=>'Sencilla',
            'description'=>'Habitacion Sencilla'
        ]);

        type_rooms::create([
            'name'=>'Doble',
            'description'=>'Habitacion Doble'
        ]);
    }
}
