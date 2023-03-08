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
            CREATE VIEW `info_clientes` AS
            SELECT
                clientes.*,
                usuarios_clientes.email
            FROM clientes LEFT JOIN usuarios_clientes
            ON usuarios_clientes.id_cliente=clientes.id
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
            DROP VIEW `info_clientes`;
        ");
    }
};
