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
        Schema::create('servicio_reservacion', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->unsignedBigInteger("id_servicio");
            $table->unsignedBigInteger("id_reservacion");

            //Definicon Llaves foraneas
            $table->foreign("id_servicio")->references("id")->on("servicios");
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
        Schema::dropIfExists('servicio_reservacion');
    }
};
