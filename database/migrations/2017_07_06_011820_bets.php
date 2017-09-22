<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets',function(Blueprint $table){
            $table->increments('id_bets');
            $table->integer('id_matche');
            $table->integer('id_user');
            $table->integer('bet_money');
            $table->integer('betting_team')->nullable();
            $table->integer('result')->nullable();
            $table->integer('collect_lost')->nullable();
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
        //
    }
}
