<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('stream_link');
            $table->string('path')->default('path');
            $table->timestamps();
        });

       /* Schema::create('photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('movie_id');
            $table->binary('photo_data')->nullable();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
