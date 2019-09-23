<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupportMemberSocialMediaLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_member_social_media_links', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('support_member_id')->unsigned();
            $table->integer('social_media_name_id')->unsigned();
            $table->string('url');
            $table->timestamps();

            $table->foreign('social_media_name_id')->references('id')->on('social_media_names');
            $table->foreign('support_member_id')->references('id')->on('support_members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_member_social_media_links');
    }
}
