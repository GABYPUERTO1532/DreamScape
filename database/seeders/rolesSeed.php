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
            'nombreRol'=>'administrador'
        ]);
        
        //Creacion Rol Gerente
        roles::create([
            'nombreRol'=>'gerente'
        ]);

        //Creacion Rol Recepcionista
        Roles::create([
            'nombreRol'=>'recepcionista'
        ]);

        //Creacion Rol Servicio al Cliente
        Roles::create([
            'nombreRol'=>'servicio al cliente'
        ]);

        //Creacion Rol Servicios Generales
        Roles::create([
            'nombreRol'=>'servicios generales'
        ]);

    }
}
