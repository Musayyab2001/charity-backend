<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class CityBasicDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        dd($this->site_settings);

        $data = DB::select('select * from city_basic_data where city = "Brakusview"');

        if (sizeof($data) > 0) {
            $data = json_decode(json_encode($data[0]), true);
            return view('basic')->with($data);
        } else {
            return view('basic');
        }
    }

    public function updateBasicData(Request $request)
    {
        $this->validate($request, ['disziplinen' => 'required', 'startgeld' => 'required', 'ablaufCharityWalk' => 'required', 'leistungen' => 'required']);
        $disziplinen = $request->input('disziplinen');
        $startgeld = $request->input('startgeld');
        $ablaufCharityWalk = $request->input('ablaufCharityWalk');
        $leistungen = $request->input('leistungen');
        $city = "Brakusview";
        DB::update('update city_basic_data set
                    disziplinen="' . $disziplinen . '", startgeld="' . $startgeld . '", ablauf="' . $ablaufCharityWalk . '", leistungen="' . $leistungen . '" where city ="' . $city . '"');

        return redirect('/basic');
    }
}
