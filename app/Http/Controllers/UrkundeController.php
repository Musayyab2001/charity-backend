<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhantomPdf\PdfGenerator;

class UrkundeController extends Controller
{
    public function index()
    {
        $cities = DB::select('select distinct stadt from ergebnisses');
        // dd($cities);
        return view('urkunde', compact('cities'));
    }

    public function createUrkunde(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'stadt' => 'required',
            'startnumber' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $stadt = request()->stadt;
        $startnumber = (int) request()->startnumber;

        $pdf = new PdfGenerator;

        // creating the pdf template
        $userErgebniss = DB::select('select * from ergebnisses where start_number = "' . $startnumber . '" and stadt = "' . $stadt . '"')[0];
        $url = view('urkunde-template', compact('userErgebniss'));
        $fileName = "CWR-" . $startnumber . "-" . $stadt . "-urkunde.pdf";
        $pdf->setStoragePath(storage_path());

        return $pdf->createFromView($url, $fileName);
    }
}
