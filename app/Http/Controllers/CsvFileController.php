<?php

namespace App\Http\Controllers;

use App\Model\Ergebnisse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Rap2hpoutre\FastExcel\FastExcel;

class CsvFileController extends Controller
{

    public function index()
    {
        return view('upload-csv');
    }

    public function upload(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        request()->file->move(public_path('uploaded-files'), 'ergebniss.csv');
        $file_path = public_path('uploaded-files/ergebniss.csv');
        $collection = (new FastExcel)->configureCsv(';')->import($file_path, function ($line) {
            return Ergebnisse::firstOrCreate([
                'stadt' => 'hamburg',
                'lauf_jahr' => '2019',
                'lauf_strecke' => '4',
                'MWPl' => $line['MWPl'],
                'AKPl' => $line['AKPl'],
                'start_number' => $line['Startnr.'],
                'name' => htmlentities($line['Name']),
                'm_w' => $line['m/w'],
                'birth_year' => $line['Jahrg.'],
                'verein' => htmlentities($line['Verein']),
                'AK' => htmlentities($line['AK']),
                'netto_zeit' => $line['Netto-Zeit'],
                'brutto_zeit' => $line['Brutto-Zeit'],
            ]);
        });

        unlink($file_path);

        return redirect()->back();
    }

}
