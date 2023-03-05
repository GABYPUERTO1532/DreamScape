<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_clients;

class user_clientsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_clients::create([
            'email'=>"correo@gmail.com",
            'password'=>'123456789',
            'id_client'=>1
        ]);
    }
}
