<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_roles', function (Blueprint $table) {
            $table->Integer('admin_id')->unsigned();
            $table->Integer('roles_id')->unsigned();
            $table->primary(['admin_id','roles_id']);
            $table->foreign('admin_id')->references('id')->on('admin_tb');
            $table->foreign('roles_id')->references('id')->on('roles');
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
        Schema::dropIfExists('ad_roles');
    }
}
