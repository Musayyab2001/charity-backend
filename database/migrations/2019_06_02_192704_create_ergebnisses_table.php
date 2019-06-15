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
            $table->string('stadt');
            $table->integer('lauf_jahr');
            $table->double('lauf_strecke');
            $table->string('MWPl')->nullable();
            $table->string('AKPl')->nullable();
            $table->string('start_number');
            $table->string('name')->nullable();
            $table->string('m_w')->nullable();
            $table->string('birth_year')->nullable();
            $table->string('verein')->nullable();
            $table->string('AK')->nullable();
            $table->string('netto_zeit')->nullable();
            $table->string('brutto_zeit')->nullable();
            $table->timestamps();
            $table->primary(['start_number', 'stadt']);
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
