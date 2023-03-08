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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("nombre",45)->unique();
            $table->string("tip_doc",30)->comment("Tipo Documento");
            $table->string("num_doc",20)->unique()->comment("Numero de Documento");
            $table->string("sex_genero",10)->comment("Sexo/Genero");
            $table->string("num_tel",10)->unique()->comment("Numero Telefonico");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
