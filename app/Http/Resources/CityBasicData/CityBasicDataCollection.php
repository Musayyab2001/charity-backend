<?php

namespace App\Http\Resources\CityBasicData;

use Illuminate\Http\Resources\Json\Resource;

class CityBasicDataCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'city' => $this->city,
            'disziplinen' => $this->disziplinen,
            'startgeld' => $this->startgeld,
            'ablauf' => $this->ablauf,
            'leistungen' => $this->leistungen,
            'href' => [
                'sponsors' => route('citybasicdata.show', $this->id),
            ],

        ];
    }
}
