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
        Schema::create('user_clients', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("email",45)->unique();
            $table->string("password",255)->unique();
            $table->unsignedBigInteger("id_client")->unique();

            //Definicion Llave Foranea
            $table->foreign("id_client")->references("id")->on("clients");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_clients');
    }
};
