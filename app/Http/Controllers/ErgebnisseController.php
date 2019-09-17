<?php

namespace App\Http\Controllers;

use App\Model\Ergebnisse;

class ErgebnisseController extends Controller
{
    public function getErgebnisse()
    {
        $ergebnisse = Ergebnisse::paginate(20);

        return view('ergebnisse', compact('ergebnisse'));
    }
}
