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
        Schema::create('service_has_reservation', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->unsignedBigInteger("id_service");
            $table->unsignedBigInteger("id_reservation");

            //Definicon Llaves foraneas
            $table->foreign("id_service")->references("id")->on("services");
            $table->foreign("id_reservation")->references("id")->on("reservations");         

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_has_reservation');
    }
};
