<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCityBasicDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_basic_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->text('disziplinen');
            $table->text('startgeld');
            $table->text('ablauf');
            $table->text('leistungen');
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
        Schema::dropIfExists('city_basic_data');
    }
}
