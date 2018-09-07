<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('story_img');
            $table->string('cea_camp1');
            $table->string('cea_camp2');
            $table->string('cea_camp3');
            $table->string('cea_camp4');
            $table->string('cea_camp5');
            $table->string('cea_camp6');
            $table->string('cea_camp7');
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
        Schema::dropIfExists('my_stories');
    }
}
