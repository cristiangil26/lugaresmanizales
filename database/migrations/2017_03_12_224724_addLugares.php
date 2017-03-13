<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('direccion',100);
            $table->string('telefono',20);
            $table->string('correo',15);
            $table->string('paginaweb',40);
            $table->enum('tipo',['Restaurante','Peluquería','Droguería','Mensajería','Bar','Discoteca']);
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
        Schema::dropIfExists('lugar');
    }
}
