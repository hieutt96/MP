<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches',function(Blueprint
            $table){
            $table->increments('id_match');
            $table->string('home');
            $table->string('way');
            $table->string('home_goal')->nullable();
            $table->string('way_goal')->nullable();
            $table->integer('home_rate');
            $table->integer('equal');
            $table->integer('way_rate');
            $table->time('time_start');
            $table->time('time_end');
            $table->time('time_bets');
            $table->date('date');
            $table->integer('public');
            $table->rememberToken();
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
        Schema::dropIfExists('matches');
    }
}
