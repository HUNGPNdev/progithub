<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BlogTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_tb', function (Blueprint $table) {
            $table->increments('id_blog');
            $table->Integer('id_ad')->unsigned();
            // $table->foreign('id_ad')->references('id')->on('admin_tb');
            $table->text('bn_image')->nullable();
            $table->text('images');
            $table->tinyInteger('status');
            $table->text('title');
            $table->text('slug');
            $table->text('sumary');
            $table->text('content');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('blog_tb');
    }
}
