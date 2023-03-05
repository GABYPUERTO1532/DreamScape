<?php

namespace Database\Seeders;

use App\Models\rooms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roomsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rooms::create([
            'code'=>"101A",
            'id_typ_room'=>1
        ]);

        rooms::create([
            'code'=>"201A",
            'id_typ_room'=>2
        ]);
    }
}
