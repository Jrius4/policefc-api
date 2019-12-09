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
            $table->string('slug');
            $table->integer('player_position_id')->unsigned();
            $table->integer('player_foot_id')->unsigned();
            $table->integer('player_category_id')->unsigned()->default(1);
            $table->string('shirt_no');
            $table->string('age');
            $table->string('nationality');
            $table->string('previous_club')->nullable();
            $table->text('bio');
            $table->timestamps();

            $table->foreign('player_position_id')->references('id')->on('player_positions');
            $table->foreign('player_foot_id')->references('id')->on('player_feet');
            $table->foreign('player_category_id')->references('id')->on('player_categories');
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
