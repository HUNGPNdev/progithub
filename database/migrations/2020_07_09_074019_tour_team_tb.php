<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourTeamTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TourTeam_tb', function (Blueprint $table) {
            $table->increments('guider_id');
            $table->string('guider_name');
            $table->tinyInteger('status')->default(0);
            $table->string('images');
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('instagram')->nullable();
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
        Schema::dropIfExists('TourTeam_tb');
    }
}
