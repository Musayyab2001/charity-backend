<?php

namespace App\Http\Controllers;

use App\Http\Controllers\View;
use DB;
use function GuzzleHttp\json_decode;
use function GuzzleHttp\json_encode;
use Illuminate\Http\Request;

class CityBasicDataController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = DB::select('select * from city_basic_data where city = "Brakusview"')[0];
        $data = json_decode(json_encode($data), true);
        return view('basic')->with($data);
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
