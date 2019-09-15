<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_pic');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('player_position_id')->unsigned();
            $table->integer('strong_foot_id')->unsigned();
            $table->string('age');
            $table->string('country');
            $table->string('previous_club')->nullable();
            $table->string('bio', 1000);
            $table->timestamps();

            $table->foreign('player_position_id')->references('id')->on('player_positions');
            $table->foreign('strong_foot_id')->references('id')->on('player_feet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
