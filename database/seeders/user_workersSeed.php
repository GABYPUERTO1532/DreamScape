<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_workers;

class user_workersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user_workers::create([
            'email'=>'sandragpuertor@gmail.com',
            'password'=>'123456789',
            'id_worker'=>1,
            'id_rol'=>1
        ]);

        user_workers::create([
            'email'=>'correolazo@gmail.com',
            'password'=>'456789012',
            'id_worker'=>2,
            'id_rol'=>2
        ]);

        user_workers::create([
            'email'=>'correovale@gmail.com',
            'password'=>'234567890',
            'id_worker'=>3,
            'id_rol'=>3
        ]);

        user_workers::create([
            'email'=>'correothomas@gmail.com',
            'password'=>'345678901',
            'id_worker'=>4,
            'id_rol'=>4
        ]);

    }
}
