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
            $table->string('content');
            $table->string('title');
            $table->string('subtile1');
            $table->string('subcontent1');
            $table->string('subimg1');

            $table->string('subtile2');
            $table->string('subcontent2');
            $table->string('subimg2');

            $table->string('subtile3');
            $table->string('subcontent3');
            $table->string('subimg3');

            $table->string('subtile4');
            $table->string('subcontent4');
            $table->string('subimg4');

            $table->string('subtile5');
            $table->string('subcontent5');
            $table->string('subimg5');
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
