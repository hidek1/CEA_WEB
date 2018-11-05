<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenderToClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('clients', function($table) {
            $table->integer('user_id');
            $table->string('gender');
            $table->string('birthday');
            $table->string('categoryofstudents');
            $table->string('course');
            $table->string('typeofroom');
            $table->date('checkin');
            $table->date('checkout');
            $table->string('reserveroom');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clients', function($table) {
            $table->dropColumn('paid');
        });
    }
}
