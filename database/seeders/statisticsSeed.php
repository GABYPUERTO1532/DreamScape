<?php

namespace Database\Seeders;

use App\Models\statistics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class statisticsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        statistics::create([
            'visits'=>250000,
            'sales'=>20000000,
            'init_period'=>'2023/01/28',
            'fin_period'=>'2023/02/28',
        ]);
    }
}
