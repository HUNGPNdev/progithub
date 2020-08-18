<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_tb', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id')->unsigned();
            $table->Integer('tour_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user_tb');
            $table->foreign('tour_id')->references('tour_id')->on('tours_tb');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('departure')->nullable();
            $table->string('tour_name')->nullable();
            $table->string('destination')->nullable();
            $table->string('children')->nullable();
            $table->string('adults')->nullable();
            $table->string('package')->nullable();
            $table->string('total')->nullable();
            $table->string('tour_price')->nullable();
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
        Schema::dropIfExists('order_tb');
    }
}
