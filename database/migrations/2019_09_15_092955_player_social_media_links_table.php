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
            $table->integer('id')->unsigned();
            $table->bigInteger('player_id')->unsigned();
            $table->integer('social_media_name_id')->unsigned();
            $table->string('url');

            $table->foreign('social_media_name_id')->references('id')->on('social_media_names');
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
