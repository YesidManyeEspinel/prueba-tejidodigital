<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PeliculasRelacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelicula_actor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('actor_id');
            
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('actor_id')->references('id')->on('actores');

            $table->timestamps();
        });

        Schema::create('pelicula_productor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('productor_id');
            
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('productor_id')->references('id')->on('productores');

            $table->timestamps();
        });

        Schema::create('pelicula_director', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('director_id');
            
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('director_id')->references('id')->on('directores');

            $table->timestamps();
        });

        Schema::create('pelicula_genero', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pelicula_id');
            $table->unsignedBigInteger('genero_id');
            
            $table->foreign('pelicula_id')->references('id')->on('peliculas');
            $table->foreign('genero_id')->references('id')->on('generos');

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
        Schema::dropIfExists('pelicula_actor');
        Schema::dropIfExists('pelicula_director');
        Schema::dropIfExists('pelicula_genero');
        Schema::dropIfExists('pelicula_productor');
    }
}
