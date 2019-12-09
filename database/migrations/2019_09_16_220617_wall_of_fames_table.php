<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WallOfFamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wall_of_fames', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->text('text');
            $table->unsignedBigInteger('wall_of_fame_category_id');
            $table->timestamps();

            $table->foreign('wall_of_fame_category_id')->references('id')->on('wall_of_fame_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wall_of_fames');
    }
}
