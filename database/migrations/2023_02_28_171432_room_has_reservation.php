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
        Schema::create('room_has_reservation', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->unsignedBigInteger("id_room");
            $table->unsignedBigInteger("id_reservation");

            //Definicion Llaves Foraneas
            $table->foreign("id_room")->references("id")->on("rooms");
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
        Schema::dropIfExists('room_has_reservation');
    }
};
