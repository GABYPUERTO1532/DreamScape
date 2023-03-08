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
        Schema::create('tipo_habitaciones', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("nombre",50)->unique();
            $table->text("descripcion")->unique();
            $table->integer("max_adultos")->comment("Maximo Adultos");
            $table->integer("max_ninos")->comment("Maximo Niños");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_habitaciones');
    }
};
