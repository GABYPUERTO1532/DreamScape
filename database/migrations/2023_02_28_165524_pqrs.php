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
            $table->string("type",11);
            $table->text("description")->unique();
            $table->boolean("important")->default(0);
            $table->unsignedBigInteger("id_user_client");

            $table->timestamps();

            //Definicion Llaves Foraneas
            $table->foreign("id_user_client")->references("id")->on("user_clients");
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
