<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharityReciversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charity_recivers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_basic_data_id')->unsigned()->index();
            $table->foreign('city_basic_data_id')->references('id')->on('city_basic_data');
            $table->string('charity_reciver_name');
            $table->binary('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('charity_recivers');
    }
}
