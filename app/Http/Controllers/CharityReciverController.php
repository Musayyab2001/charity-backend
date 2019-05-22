<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CharityReciverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('select charity_reciver_name, image from charity_recivers inner join city_basic_data on city_basic_data.id = charity_recivers.city_basic_data_id where city = "Brakusview"');
        $data = json_decode(json_encode($data), true);
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        return view('spenden', compact('data'));
    }

    public function updateCharityReceiverDB($charity_receiver_name, $imageLink)
    {
        $city = "Brakusview";

        DB::insert('INSERT INTO charity_recivers SET
        charity_reciver_name="' . $charity_receiver_name . '",
        image="' . $imageLink . '",
        city_basic_data_id=(SELECT id FROM city_basic_data WHERE city_basic_data.city ="' . $city . '")');

        return redirect('/spenden');
    }

    public function imageUploadPost()
    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
        ]);

        $imageText = request()->name;

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $imagelink = "https://$_SERVER[HTTP_HOST]/images/" . $imageName;

        request()->image->move(public_path('images'), $imageName);

        $this->updateCharityReceiverDB($imageText, $imagelink);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }
}
