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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("code",4)->unique();
            $table->unsignedBigInteger("id_typ_room");
            $table->boolean("status")->default(1);

            //Definicion Llaves foraneas
            $table->foreign("id_typ_room")->references("id")->on("type_rooms");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
