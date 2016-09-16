<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('validated')->default(false);
            $table->integer('num_validation')->default(0);
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->string('stars');
            $table->string('parking_space');
            $table->string('wifi');
            $table->string('pet_friendly');
            $table->string('indoor_pool');
            $table->string('outdoor_pool');
            $table->string('spa');
            $table->timestamps();
        });

        Schema::table('hotels', function (Blueprint $table) {
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
        Schema::drop('hotels');
    }
}
