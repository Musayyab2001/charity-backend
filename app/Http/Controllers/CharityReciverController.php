<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharityReciverResource;
use App\Model\CharityReciver;
use App\Model\CityBasicData;
use Illuminate\Http\Request;

class CharityReciverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CharityReciver::all();
        return CharityReciverResource::collection($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\CharityReciver  $charityReciver
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CityBasicData::find($id)->charityReciver;
        return CharityReciverResource::collection($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CharityReciver  $charityReciver
     * @return \Illuminate\Http\Response
     */
    public function edit(CharityReciver $charityReciver)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CharityReciver  $charityReciver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CharityReciver $charityReciver)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CharityReciver  $charityReciver
     * @return \Illuminate\Http\Response
     */
    public function destroy(CharityReciver $charityReciver)
    {
        //
    }
}
