<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\usuarios_clientes;

class usuarios_clientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        usuarios_clientes::create([
            'email'=>"correo@gmail.com",
            'password'=>'123456789',
            'id_cliente'=>1
        ]);

        usuarios_clientes::create([
            'email'=>"empresa_patito@gmail.com",
            'password'=>'987654321',
            'id_cliente'=>2
        ]);
    }
}
