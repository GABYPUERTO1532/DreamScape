<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW `info_habitaciones` AS
            SELECT
                habitaciones.id,
                habitaciones.codigo,
                habitaciones.estado,
                tipo_habitaciones.nombre AS 'categoria',
                tipo_habitaciones.descripcion,
                tipo_habitaciones.max_adultos,
                tipo_habitaciones.max_ninos
                
            FROM habitaciones LEFT JOIN tipo_habitaciones
            ON habitaciones.id_tipo_habitacion=tipo_habitaciones.id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("
            DROP VIEW `info_habitaciones`;
        ");
    }
};
