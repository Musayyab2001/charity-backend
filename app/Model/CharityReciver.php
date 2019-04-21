<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CharityReciver extends Model
{
    public function cityBasicData()
    {
        return $this->belongsTo(CityBasicData::class);
    }
}
