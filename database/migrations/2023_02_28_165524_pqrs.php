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

            $table->string("tipo",11);
            $table->text("descripcion")->unique();
            $table->boolean("important")->default(FALSE);
            $table->unsignedBigInteger("id_cliente");

            $table->timestamps();

            $table->foreign("id_cliente")->references("id")->on("user_clientes");
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
