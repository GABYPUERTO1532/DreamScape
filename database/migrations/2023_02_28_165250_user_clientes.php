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
        Schema::create('user_clientes', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("email",45)->unique();
            $table->string("password",255)->unique();
            $table->unsignedBigInteger("id_cliente")->unique();

            $table->timestamps();

            //Definicion Llave Foranea
            $table->foreign("id_cliente")->references("id")->on("clientes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_clientes');
    }
};
