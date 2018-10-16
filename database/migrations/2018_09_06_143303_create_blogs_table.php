<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('blog_img');
            $table->integer('size');
            $table->string('title');
            $table->string('subtile1')->nullable();
            $table->string('subcontent1')->nullable();
            $table->string('subimg1')->nullable();

            $table->string('subtile2')->nullable();
            $table->string('subcontent2')->nullable();
            $table->string('subimg2')->nullable();

            $table->string('subtile3')->nullable();
            $table->string('subcontent3')->nullable();
            $table->string('subimg3')->nullable();;

            $table->string('subtile4')->nullable();;
            $table->string('subcontent4')->nullable();;
            $table->string('subimg4')->nullable();;

            $table->string('subtile5')->nullable();;
            $table->string('subcontent5')->nullable();;
            $table->string('subimg5')->nullable();;
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
        Schema::dropIfExists('blogs');
    }
}
