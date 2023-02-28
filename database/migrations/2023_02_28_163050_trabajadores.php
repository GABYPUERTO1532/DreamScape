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
        Schema::create('trabajadores', function (Blueprint $table) {
            $table->id();

            $table->string("nombre",50)->unique();
            $table->string("tip_doc",30);
            $table->string("num_doc",20)->unique();
            $table->string("num_tel",14)->unique();
            $table->string("sexo",10);
            $table->date("fechaNac");
            $table->text("url_foto")->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadores');
    }
};
