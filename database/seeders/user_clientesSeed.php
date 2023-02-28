<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_clientes;

class user_clientesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_clientes::create([
            'email'=>"correo@gmail.com",
            'password'=>'123456789',
            'id_cliente'=>1
        ]);
    }
}
