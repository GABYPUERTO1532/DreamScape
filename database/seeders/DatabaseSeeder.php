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

            //Ejecucion Seed usuarios_trabajadores
            usuarios_trabajadoresSeed::class,

            //Ejecucion Seed Clientes
            clientesSeed::class,

            //Ejecicion Seed usuarios_clientes
            usuarios_clientesSeed::class,

            //Ejecucion Seed pqrs
            pqrsSeed::class,

            //Ejecicion Seed tipo_habitaciones
            tipo_habitacionesSeed::class,

            //Ejecucion Seed Habitaciones
            habitacionesSeed::class,

            //Ejecucion Seed Reservaciones
            reservacionesSeed::class,

            //Ejecucion Seed habitacion_reservacion
            habitacion_reservacionSeed::class,

            //Ejecucion Seed Servicios
            serviciosSeed::class,

            //Ejecucion Seed servicios_reservacion
            servicio_reservacionSeed::class,

            //Ejecucion Seed estadisticas
            estadisticasSeed::class,

            //Ejecucion Seed Categorias_registros
            categorias_registrosSeed::class,

            //Ejecucion Seed registros_contables
            registros_contablesSeed::class
        ]);
    }
}
