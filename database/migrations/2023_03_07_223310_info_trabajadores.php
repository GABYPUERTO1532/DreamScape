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
            CREATE VIEW `info_trabajadores` AS
            SELECT
                trabajadores.*,
                usuarios_trabajadores.email,
                roles.nombre AS 'rol'
            FROM trabajadores INNER JOIN usuarios_trabajadores
            ON usuarios_trabajadores.id_trabajador=trabajadores.id
            
            INNER JOIN roles
            ON roles.id=usuarios_trabajadores.id_rol;
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
            DROP VIEW `info_trabajadores`;
        ");
    }
};
