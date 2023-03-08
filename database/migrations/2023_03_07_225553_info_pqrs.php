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
            CREATE VIEW `info_pqrs` AS
            SELECT
                pqrs.id,
                pqrs.tipo,
                pqrs.descripcion,
                clientes.id as 'id_cliente',
                clientes.nombre as 'nombre_cliente',
                usuarios_clientes.email
            FROM pqrs INNER JOIN usuarios_clientes
            ON pqrs.id_usuario_cliente=usuarios_clientes.id

            INNER JOIN clientes
            ON clientes.id=usuarios_clientes.id_cliente;
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
            DROP VIEW `info_pqrs`;
        ");
    }
};
