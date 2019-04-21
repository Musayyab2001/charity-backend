<?php

namespace App\Model;

use App\Model\CharityReciver;
use App\Model\Sponsor;
use Illuminate\Database\Eloquent\Model;

class CityBasicData extends Model
{
    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }

    public function charityReciver()
    {
        return $this->hasMany(CharityReciver::class);
    }
}
