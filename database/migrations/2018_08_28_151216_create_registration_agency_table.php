<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regi_agencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agency_name');
            $table->string('program');
            $table->string('term');
            $table->string('student_name');
            $table->string('parent_name');
            $table->string('nationality');
            $table->string('student_age');
            $table->string('parent_age');
            $table->string('residence');
            $table->string('phone_number');
            $table->string('email');
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
        Schema::dropIfExists('regi_agencies');
    }
}
