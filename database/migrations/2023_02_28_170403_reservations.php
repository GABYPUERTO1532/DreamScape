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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->datetime("init_date");
            $table->datetime("fin_date");
            $table->string("cost",8);
            $table->integer("num_Adult");
            $table->integer("num_child");
            $table->string("status",20);
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
        Schema::dropIfExists('reservations');
    }
};
