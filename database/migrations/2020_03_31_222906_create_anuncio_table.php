<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa',50);
            $table->string('eslogan',50);
            $table->string('titulo',50);
            $table->text('contenido');
            $table->string('telefono',50);
            $table->string('direccion',60);
            $table->string('correo',50);
            $table->string('ruta_logo');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation ='utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anuncio');
    }
}
