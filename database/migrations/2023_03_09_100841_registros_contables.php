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
        Schema::create('registros_contables', function (Blueprint $table) {
            $table->id();

            $table->text("concepto");
            $table->unsignedBigInteger("id_categoria");
            $table->string("tipo_movimiento");
            $table->string("valor");
            $table->unsignedBigInteger("id_usuario_trabajador");

            $table->timestamps();

            $table->foreign("id_categoria")->references("id")->on("categorias_registros");
            $table->foreign("id_usuario_trabajador")->references("id")->on("usuarios_trabajadores");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros_contables');
    }
};
