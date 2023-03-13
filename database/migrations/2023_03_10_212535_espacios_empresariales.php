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
        Schema::create('espacios_empresariales', function (Blueprint $table) {
            $table->id();

            $table->string("codigo");
            $table->unsignedBigInteger("id_tipo_espacio");

            $table->foreign("id_tipo_espacio")->references("id")->on("tipo_espacios");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacios_empresariales');
    }
};
