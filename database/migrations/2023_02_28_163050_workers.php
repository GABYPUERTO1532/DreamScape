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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();

            //Columnas Personalizadas
            $table->string("name",50)->unique();
            $table->string("doc_typ",30);
            $table->string("doc_num",20)->unique();
            $table->string("pho_num",14)->unique();
            $table->string("sex_gender",10);
            $table->date("date_birth");
            $table->text("url_photo")->unique();

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
        Schema::dropIfExists('workers');
    }
};
