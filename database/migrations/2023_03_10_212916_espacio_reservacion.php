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
        Schema::create('espacio_reservacion', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_reservacion");
            $table->unsignedBigInteger("id_espacio");

            $table->foreign("id_reservacion")->references("id")->on("reservaciones");
            $table->foreign("id_espacio")->references("id")->on("espacios_empresariales");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacio_reservacion');
    }
};
