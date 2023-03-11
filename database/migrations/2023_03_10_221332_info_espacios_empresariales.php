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
            CREATE VIEW `info_espacios_empresariales` AS
            SELECT 
                espacios_empresariales.id,
                espacios_empresariales.codigo AS 'codigo_habitacion',
                tipo_espacios.nombre AS 'tipo_espacio',
                tipo_espacios.descripcion,
                tipo_espacios.max_personas,
                tipo_espacios.costo AS 'costo_base'
                
            FROM espacios_empresariales INNER JOIN tipo_espacios
            ON espacios_empresariales.id_tipo_espacio=tipo_espacios.id;
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
            DROP VIEW `info_espacios_empresariales`;
        ");
    }
};
