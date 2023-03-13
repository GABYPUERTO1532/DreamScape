<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\roles;

class rolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creacion Rol Administrador
        Roles::create([
            'nombre'=>'administrador'
        ]);
        
        //Creacion Rol Gerente
        roles::create([
            'nombre'=>'gerente'
        ]);

        //Creacion Rol Recepcionista
        Roles::create([
            'nombre'=>'recepcionista'
        ]);

        //Creacion Rol Servicio al Cliente
        Roles::create([
            'nombre'=>'servicio al cliente'
        ]);

        //Creacion Rol Servicios Generales
        Roles::create([
            'nombre'=>'servicios generales'
        ]);

        //Creacion Rol Tesoreria
        Roles::create([
            'nombre'=>'tesorero'
        ]);

    }
}
