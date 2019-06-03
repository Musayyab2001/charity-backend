<?php

namespace App\Http\Controllers;

use App\Model\Ergebnisse;
use Rap2hpoutre\FastExcel\FastExcel;

class CsvFileController extends Controller
{
    public function index()
    {
        $collection = (new FastExcel)->configureCsv(';')->import('C:\Users\mussa\Desktop\file.csv', function ($line) {
            return Ergebnisse::create([
                'stadt' => 'hamburg',
                'lauf_jahr' => '2019',
                'lauf_strecke' => '4',
                'MWPl' => $line['MWPl'],
                'start_number' => $line['Startnr.'],
                'name' => $line['Name'],
                'birth_year' => $line['Jahrg.'],
                'm/w' => $line['m/w'],
                'AK' => $line['AK'],
                'verein' => $line['Verein'],
                'zeit' => $line['Zeit'],
            ]);
        });
        // dd($collection);
    }
}
