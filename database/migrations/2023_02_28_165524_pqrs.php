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
        Schema::create('pqrs', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("tipo",11);
            $table->text("descripcion")->unique();
            $table->boolean("importante")->default(0);
            $table->unsignedBigInteger("id_usuario_cliente");

            $table->timestamps();

            //Definicion Llaves Foraneas
            $table->foreign("id_usuario_cliente")->references("id")->on("usuarios_clientes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pqrs');
    }
};
