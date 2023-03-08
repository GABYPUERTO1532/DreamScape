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
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("codigo",4)->unique();
            $table->unsignedBigInteger("id_tipo_habitacion");
            $table->boolean("estado")->default(1);

            //Definicion Llaves foraneas
            $table->foreign("id_tipo_habitacion")->references("id")->on("tipo_habitaciones");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
};
