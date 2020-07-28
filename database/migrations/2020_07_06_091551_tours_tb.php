<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ToursTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tours_tb', function (Blueprint $table) {
            $table->increments('tour_id');
            $table->string('tour_name');
            $table->integer('dest_id')->unsigned();
            $table->string('tour_sumary');
            $table->text('tour_content');
            $table->string('tour_image');
            $table->string('tour_price');
            $table->string('tour_day');
            $table->text('maps');
            $table->tinyInteger('status');
            $table->string('list_tags');
            $table->string('package ');
            $table->foreign('dest_id')
                  ->references('dest_id')
                  ->on('destination_tb')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('Tours_tb');
    }
}
