<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UrkundeTemplateController extends Controller
{
    public function index($startnumber, $stadt)
    {
        $userErgebniss = DB::select('select * from ergebnisses where start_number = "' . $startnumber . '" and stadt = "' . $stadt . '"')[0];

        return view('urkunde-template', compact('userErgebniss'));
    }
}
