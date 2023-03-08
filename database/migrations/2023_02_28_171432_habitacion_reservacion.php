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
        Schema::create('habitacion_reservacion', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->unsignedBigInteger("id_habitacion");
            $table->unsignedBigInteger("id_reservacion");

            //Definicion Llaves Foraneas
            $table->foreign("id_habitacion")->references("id")->on("habitaciones");
            $table->foreign("id_reservacion")->references("id")->on("reservaciones");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacion_reservacion');
    }
};
