<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SliderTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_tb', function (Blueprint $table) {
            $table->increments('slider_id');
            $table->string('slider_name');
            $table->text('slider_img');
            $table->text('slider_description');
            $table->tinyInteger('slider_status');
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
        Schema::dropIfExists('slider_tb');
    }
}
