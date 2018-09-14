<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeliculasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('archivo');
            $table->string('titulo');
            $table->string('descripcion');
            $table->integer('idTipoArticulo')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('idTipoArticulo')->references('id')->on('tipo_articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('peliculas');
    }
}
