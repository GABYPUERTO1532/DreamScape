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
            'name'=>'administrador'
        ]);
        
        //Creacion Rol Gerente
        roles::create([
            'name'=>'gerente'
        ]);

        //Creacion Rol Recepcionista
        Roles::create([
            'name'=>'recepcionista'
        ]);

        //Creacion Rol Servicio al Cliente
        Roles::create([
            'name'=>'servicio al cliente'
        ]);

        //Creacion Rol Servicios Generales
        Roles::create([
            'name'=>'servicios generales'
        ]);

    }
}
