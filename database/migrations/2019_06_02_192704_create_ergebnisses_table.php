<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErgebnissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ergebnisses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stadt');
            $table->integer('lauf_jahr');
            $table->double('lauf_strecke');
            $table->string('MWPl')->nullable();
            $table->string('start_number');
            $table->string('name')->nullable();
            $table->integer('birth_year')->nullable();
            $table->string('m/w')->nullable();
            $table->string('AK')->nullable();
            $table->string('verein')->nullable();
            $table->string('zeit')->nullable();
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
        Schema::dropIfExists('ergebnisses');
    }
}
