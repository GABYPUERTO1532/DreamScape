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
            CREATE VIEW `habitaciones_reservadas` AS
            SELECT
                habitaciones.id as 'id_habitacion',
                tipo_habitaciones.id as 'id_categoria',
                reservaciones.id as 'id_reservacion',
                clientes.nombre as 'nombre_cliente',
                usuarios_clientes.email
                
            FROM habitaciones INNER JOIN habitacion_reservacion
            ON habitaciones.id=habitacion_reservacion.id_habitacion
            
            INNER JOIN reservaciones
            ON habitacion_reservacion.id_reservacion=reservaciones.id
            
            INNER JOIN usuarios_clientes
            ON reservaciones.id_usuario_cliente=usuarios_clientes.id
            
            INNER JOIN clientes
            ON clientes.id=usuarios_clientes.id_cliente
                
            INNER JOIN tipo_habitaciones
            ON tipo_habitaciones.id=habitaciones.id_tipo_habitacion;

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
            DROP VIEW `habitaciones_reservadas`;
        ");
    }
};
