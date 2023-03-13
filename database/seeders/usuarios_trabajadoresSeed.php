<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios_trabajadores;

class usuarios_trabajadoresSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuarios_trabajadores::create([
            'email'=>'sandragpuertor@gmail.com',
            'password'=>'123456789',
            'id_trabajador'=>1,
            'id_rol'=>1
        ]);

        usuarios_trabajadores::create([
            'email'=>'correolazo@gmail.com',
            'password'=>'456789012',
            'id_trabajador'=>2,
            'id_rol'=>2
        ]);

        usuarios_trabajadores::create([
            'email'=>'correovale@gmail.com',
            'password'=>'234567890',
            'id_trabajador'=>3,
            'id_rol'=>6
        ]);

        usuarios_trabajadores::create([
            'email'=>'correothomas@gmail.com',
            'password'=>'345678901',
            'id_trabajador'=>4,
            'id_rol'=>4
        ]);

    }
}
