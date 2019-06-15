<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ergebnisse extends Model
{
    protected $fillable = ['stadt', 'lauf_jahr', 'lauf_strecke', 'MWPl', 'AKPl', 'start_number', 'name', 'm_w', 'birth_year', 'verein', 'AK', 'netto_zeit', 'brutto_zeit'];
}
