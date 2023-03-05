<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\estadisticas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            //Ejecucion Seed Roles
            rolesSeed::class,

            //Ejecucion Seed Workers
            workersSeed::class,

            //Ejecucion Seed User_workers
            user_workersSeed::class,

            //Ejecucion Seed Clients
            clientsSeed::class,

            //Ejecicion Seed User_clients
            user_clientsSeed::class,

            //Ejecucion Seed pqrs
            pqrsSeed::class,

            //Ejecicion Seed Tipo Habitaciones
            type_roomSeed::class,

            //Ejecucion Seed Habitaciones
            roomsSeed::class,

            //Ejecucion Seed Reservations
            reservationsSeed::class,

            //Ejecucion Seed room_has_reservation
            room_has_reservationSeed::class,

            //Ejecucion Seed Services
            servicesSeed::class,

            //Ejecucion Seed services_has_reservation
            service_has_reservationSeed::class,

            //Ejecucion Seed statistics
            statisticsSeed::class,
        ]);
    }
}
