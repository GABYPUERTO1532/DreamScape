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
        Schema::create('servicio_has_reservacion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_servicio");
            $table->unsignedBigInteger("id_reserva");

            $table->timestamps();
            $table->foreign("id_servicio")->references("id")->on("servicios");
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
        Schema::dropIfExists('servicio_has_reservacion');
    }
};
