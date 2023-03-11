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

            CREATE VIEW `info_participantes_evento` AS

            SELECT 
                participantes_eventos.id,
                participantes_eventos.nombre,
                participantes_eventos.tip_doc,
                participantes_eventos.num_doc,
                participantes_eventos.sex_genero,
                reservaciones.id AS 'id_reserva',
                espacios_empresariales.codigo as 'codigo_espacio',
                reservaciones.estado AS 'estado_reservacion'
                
            FROM participantes_eventos LEFT JOIN reservaciones
            ON reservaciones.id=participantes_eventos.id_reserva

            LEFT JOIN espacio_reservacion
            ON espacio_reservacion.id_reservacion=participantes_eventos.id_reserva

            LEFT JOIN espacios_empresariales
            ON espacios_empresariales.id=espacio_reservacion.id_espacio;

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
            DROP VIEW `info_participantes_evento`;
        ");
    }
};
