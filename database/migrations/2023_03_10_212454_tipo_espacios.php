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
        Schema::create('tipo_espacios', function (Blueprint $table) {
            $table->id();
            
            $table->string("nombre");
            $table->text("descripcion");
            $table->integer("max_personas");
            $table->string("costo");
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_espacios');
    }
};
