<?php

namespace App\Http\Resources\CityBasicData;

use Illuminate\Http\Resources\Json\JsonResource;

class CityBasicDataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'href' => [
                'sponsors' => route('sponsors.show', $this->id),
                'charityrecivers' => route('charityrecivers.show', $this->id),
            ],
        ];
    }
}
