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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->datetime("fecha_ini")->comment("Fecha Inicio");
            $table->datetime("fecha_fin")->comment("Fecha Fin");
            $table->string("costo",8);
            $table->integer("num_adulto")->comment("Numero Adultos");
            $table->integer("num_nino")->comment("Numero Niños");
            $table->string("estado",20);
            $table->unsignedBigInteger("id_usuario_cliente");

            $table->timestamps();

            //Definicion Llaves Foraneas
            $table->foreign("id_usuario_cliente")->references("id")->on("usuarios_clientes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
};
