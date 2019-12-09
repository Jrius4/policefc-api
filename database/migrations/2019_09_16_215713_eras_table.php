<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ErasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt',1000);
            $table->text('body');
            $table->string('occurance_date');
            $table->unsignedBigInteger('era_category_id')->nullable();
            $table->softDeletes();

            $table->timestamps();

            $table->foreign('era_category_id')->references('id')->on('era_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eras');
    }
}
