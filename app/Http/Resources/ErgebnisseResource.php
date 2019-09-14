<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ErgebnisseResource extends Resource
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
            'lauf' => $this->lauf,
            'stadt' => $this->stadt,
            'datum' => $this->datum,
            'lauf_jahr' => $this->lauf_jahr,
            'lauf_strecke' => $this->lauf_strecke,
            'gesamt_pl' => $this->gesamt_pl,
            'MWPl' => $this->MWPl,
            'AKPl' => $this->AKPl,
            'start_number' => $this->start_number,
            'Name' => $this->name,
            'm_w' => $this->m_w,
            'birth_year' => $this->birth_year,
            'verein' => $this->verein,
            'AK' => $this->AK,
            'netto_zeit' => $this->netto_zeit,
            'brutto_zeit' => $this->brutto_zeit,
        ];
    }
}
