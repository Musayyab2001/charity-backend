<?php

namespace App\Model;

use App\Model\CityBasicData;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function cityBasicData()
    {
        return $this->belongsTo(CityBasicData::class);
    }
}
