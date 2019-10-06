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
            $table->string('media_name');
            $table->string('url');
            $table->timestamps();

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
