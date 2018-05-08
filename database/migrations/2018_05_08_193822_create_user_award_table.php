<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_award', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('award_id')->unsigned();
            $table->integer('user_id')->unsigned();

            # Make foreign keys
            $table->foreign('award_id')->references('id')->on('awards');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_award');
    }
}
