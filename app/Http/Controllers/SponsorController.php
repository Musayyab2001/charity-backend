<?php

namespace App\Http\Controllers;

use App\Model\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::select('select sponsors.id, sponsor_name, image from sponsors inner join city_basic_data on city_basic_data.id = sponsors.city_basic_data_id where city = "Brakusview"');
        $data = json_decode(json_encode($data), true);
        return view('sponsoren', compact('data'));
    }

    public function updateSponsorsDB($sponsor_name, $imageLink)
    {
        $city = "Brakusview";

        DB::insert('INSERT INTO sponsors SET
        sponsor_name="' . $sponsor_name . '",
        image="' . $imageLink . '",
        city_basic_data_id=(SELECT id FROM city_basic_data WHERE city_basic_data.city ="' . $city . '")');

        return redirect('/sponsoren');
    }

    public function imageUploadPost()
    {

        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
        ]);

        $imageText = request()->name;

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        $imagelink = "https://$_SERVER[HTTP_HOST]/images/sponsors/" . $imageName;

        request()->image->move(public_path('images/sponsors'), $imageName);

        $this->updateSponsorsDB($imageText, $imagelink);

        return back()
            ->with('success', 'You have successfully upload image.')
            ->with('image', $imageName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Sponsor::find($id);
        $uri_parts = explode('/', $image->image);
        $file_path = public_path() . '\images\sponsors\\' . end($uri_parts);

        unlink($file_path);
        $image->delete();

        return redirect('/sponsoren')->with('success', 'Image deleted');
    }
}
