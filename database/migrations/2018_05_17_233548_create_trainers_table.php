<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//Ejecuta nuestra migration y crea nuestra tabla
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps(); //Nos crea dos campos donde se crea y actualiza un campo
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  
    {
        Schema::dropIfExists('trainers');
    }
}
