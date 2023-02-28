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
        Schema::create('habitacion_has_reservacion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_habitacion");
            $table->unsignedBigInteger("id_reserva");

            $table->timestamps();
            $table->foreign("id_habitacion")->references("id")->on("habitaciones");
            $table->foreign("id_reserva")->references("id")->on("reservaciones");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitacion_has_reservacion');
    }
};
