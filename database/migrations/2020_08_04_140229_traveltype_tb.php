<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TraveltypeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traveltype_tb', function (Blueprint $table) {
            $table->Integer('tour_id')->unsigned();
            $table->string('first')->nullable();
            $table->string('business')->nullable();
            $table->string('premium')->nullable();
            $table->string('economy')->nullable();
            $table->primary(['tour_id']);
            $table->foreign('tour_id')->references('tour_id')->on('tours_tb');
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
        Schema::dropIfExists('traveltype_tb');
    }
}
