<?php

use App\SoccerModels\SupportMember;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SupportMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('support_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('profile_pic');
            $table->integer('position_id')->unsigned();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('bio',1000);
            $table->string('is_executive')->default(SupportMember::TECHNICAL_Member);
            $table->timestamps();
            
            $table->foreign('position_id')->references('id')->on('support_member_positions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('support_members');
    }
}
