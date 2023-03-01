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
            $table->datetime("fechaInicio");
            $table->datetime("fechaFin");
            $table->string("precio",8);
            $table->integer("numAdulto");
            $table->integer("numNino");
            $table->string("estado",20);
            $table->unsignedBigInteger("id_cliente");

            $table->timestamps();

            //Definicion Llaves Foraneas
            $table->foreign("id_cliente")->references("id")->on("clientes");
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
