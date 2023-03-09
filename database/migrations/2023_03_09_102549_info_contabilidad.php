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
            CREATE VIEW `info_contabilidad` AS
            SELECT 
                registros_contables.concepto,
                categorias_registros.nombre as 'nombre_categoria',
                registros_contables.tipo_movimiento,
                registros_contables.valor,
                registros_contables.id_usuario_trabajador,
                trabajadores.nombre as 'nombre_trabajador',
                registros_contables.created_at,
                registros_contables.updated_at
                
            FROM registros_contables INNER JOIN categorias_registros
            ON categorias_registros.id=registros_contables.id_categoria

            INNER JOIN usuarios_trabajadores
            ON usuarios_trabajadores.id=registros_contables.id_usuario_trabajador

            INNER JOIN trabajadores
            ON usuarios_trabajadores.id_trabajador=trabajadores.id;
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
            DROP VIEW `info_contabilidad`;
        ");
    }
};
