<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Review extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('review_id');
            $table->Integer('services');
            $table->Integer('rooms');
            $table->Integer('hospitality');
            $table->Integer('comfort');
            $table->Integer('cleanliness');
            $table->Integer('satisfaction');
            $table->Integer('avg');
            $table->text('review_cmt');
            $table->tinyInteger('review_status');
            $table->Integer('user_id')->unsigned();
            $table->Integer('tour_id')->unsigned();
            $table->Foreign('user_id')->References('id')->on('users_tb')->onDelete('cascade');
            $table->Foreign('tour_id')->References('tour_id')->on('tours_tb')->onDelete('cascade');
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
        Schema::dropIfExists('review');
    }
}
