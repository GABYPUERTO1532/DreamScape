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
        Schema::create('participantes_eventos', function (Blueprint $table) {
            $table->id();

            $table->string("nombre",50);
            $table->string("tip_doc",30)->comment("Tipo de Documento");
            $table->string("num_doc",20)->comment("Numero de Documento");
            $table->string("sex_genero",10)->comment("Sexo/Genero");
            $table->unsignedBigInteger("id_reserva");

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
        Schema::dropIfExists('participantes_eventos');
    }
};
