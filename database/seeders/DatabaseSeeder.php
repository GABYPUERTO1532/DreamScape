<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

            //Ejecucion Seed Trabajadores
            trabajadoresSeed::class,

            //Ejecucion Seed User_trabajadores
            user_trabajadoresSeed::class,

            //Ejecucion Seed Clientes
            clientesSeed::class,

            //Ejecicion Seed User_clientes
            user_clientesSeed::class,

            //Ejecucion Seed pqrs
            pqrsSeed::class,

            //Ejecicion Seed Tipo Habitaciones
            tipo_habitacionesSeed::class,

            //Ejecucion Seed Habitaciones
            habitacionesSeed::class,

            //Ejecucion Seed Reservaciones
            reservacionesSeed::class,

            //Ejecucion Seed habitacion_has_reservacion
            //habitacion_has_reservacionSeed::class,

            //Ejecucion Seed Servicios
            serviciosSeed::class,

            //Ejecucion Seed servicio_has_reservacion
            //servicio_has_reservacionSeed::class,
        ]);
    }
}
