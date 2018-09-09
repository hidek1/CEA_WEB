<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('class');
            $table->string('class_comment')->nullable();
            $table->string('teacher');
            $table->string('teacher_comment')->nullable();
            $table->string('facility');
            $table->string('facility_comment')->nullable();
            $table->string('activity');
            $table->string('activity_comment')->nullable();
            $table->string('total');
            $table->string('total_comment')->nullable();
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
        Schema::dropIfExists('surveys');
    }
}
