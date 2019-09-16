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

        // $url = "https://" . $_SERVER['SERVER_NAME'] . "/urkunde-template/" . $startnumber . "/" . $stadt;

        // $rasterizeJS = asset('assets/js/rasterize.js');

        // $fileName = "urkunde.pdf";

        // $shellCommand = "phantomjs " . $rasterizeJS . " '" . $url . "' " . $fileName;

        // $output = system($shellCommand);

        $pdf = new PdfGenerator;

        // $pdf->setBinaryPath($pdf->getBinaryPath());

        $cities = DB::select('select distinct stadt from ergebnisses');

        $html = view('urkunde', compact('cities'));

        // Set a writable path for temporary files
        $pdf->setStoragePath(storage_path());

        // Saves the PDF as a file (optional)
        // $pdf->saveFromView($html, 'filename.pdf');

        // Returns a Symfony\Component\HttpFoundation\BinaryFileResponse
        return $pdf->saveFromView($html, 'filename.pdf');
    }
}
