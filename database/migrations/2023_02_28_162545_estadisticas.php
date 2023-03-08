<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("visitas",7);
            $table->string("ventas",9);
            $table->date("ini_periodo")->unique()->comment("Inicio Periodo");
            $table->date("fin_periodo")->unique()->comment("Fin Periodo");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estadisticas');
    }
};
