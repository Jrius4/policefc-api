<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlayerSocialMediaLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_social_media_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('player_id')->unsigned();
            $table->string('media_name');
            $table->string('url');
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_social_media_links');
    }
}
