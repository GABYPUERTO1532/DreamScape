<?php

namespace Database\Seeders;

use App\Models\registros_contables;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class registros_contablesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        registros_contables::create([
            'concepto'=>"Compra Clorox",
            'id_categoria'=>1,
            'tipo_movimiento'=>'Egreso',
            'valor'=>'50000',
            'id_usuario_trabajador'=>3,
        ]);

        registros_contables::create([
            'concepto'=>"Compra puertas de Seguridad",
            'id_categoria'=>2,
            'tipo_movimiento'=>'Egreso',
            'valor'=>'2000000',
            'id_usuario_trabajador'=>3,
        ]);

        registros_contables::create([
            'concepto'=>"Ingreso mensual feb-2023",
            'id_categoria'=>3,
            'tipo_movimiento'=>'ingreso',
            'valor'=>'40000000',
            'id_usuario_trabajador'=>3,
        ]);
    }
}
