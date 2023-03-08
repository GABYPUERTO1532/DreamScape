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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("nombre",50)->unique();
            $table->string("tip_doc",30)->comment("Tipo de Documento");
            $table->string("num_doc",20)->unique()->comment("Numero de Documento");
            $table->string("num_tel",14)->unique()->comment("Numero Telefonico");
            $table->string("sex_genero",10)->comment("Sexo/Genero");
            $table->date("fech_nac")->comment("Fecha de Nacimiento");
            $table->text("url_foto")->unique()->comment("URL Foto Usuario");

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
        Schema::dropIfExists('trabajadores');
    }
};
