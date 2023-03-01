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
        Schema::create('user_trabajadores', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("email",255)->unique();
            $table->string("password",255)->unique();
            $table->unsignedBigInteger("id_trabajador")->unique();
            $table->unsignedBigInteger("id_rol");

            $table->timestamps();

            //Definicion Llaves Foraneas
            $table->foreign("id_trabajador")->references("id")->on("trabajadores");
            $table->foreign("id_rol")->references("id")->on("roles");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_trabajadores');
    }
};
