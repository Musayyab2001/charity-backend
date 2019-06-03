<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Ergebnisse extends Model
{
    protected $fillable = ['stadt', 'lauf_jahr', 'lauf_strecke', 'MWPl', 'start_number', 'name', 'birth_year', 'm/w', 'AK', 'verein', 'zeit'];
}
