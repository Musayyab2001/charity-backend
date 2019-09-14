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
            $table->string('lauf');
            $table->string('stadt');
            $table->string('datum');
            $table->integer('lauf_jahr');
            $table->string('lauf_strecke');
            $table->string('gesamt_pl')->nullable();
            $table->string('MWPl')->nullable();
            $table->integer('AKPl')->nullable();
            $table->integer('start_number');
            $table->string('name')->nullable();
            $table->string('m_w')->nullable();
            $table->integer('birth_year')->nullable();
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
