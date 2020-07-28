<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PackageInclude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_include', function (Blueprint $table) {
            $table->increments('pac_id');
            $table->string('pac_name');
            $table->tinyInteger('status');
            // $table->foreign('pac_id')
            //       ->references('package')
            //       ->on('Tours_tb')
            //       ->onDelete('cascade');
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
        Schema::dropIfExists('package_include');
    }
}
