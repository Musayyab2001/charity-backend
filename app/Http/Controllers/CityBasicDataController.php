<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityBasicData\CityBasicDataResource;
use App\Model\CityBasicData;
use Illuminate\Http\Request;

class CityBasicDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CityBasicData::all();
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
     * @param  \App\Model\CityBasicData  $cityBasicData
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CityBasicData::find($id);
        return new CityBasicDataResource($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\CityBasicData  $cityBasicData
     * @return \Illuminate\Http\Response
     */
    public function edit(CityBasicData $cityBasicData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\CityBasicData  $cityBasicData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CityBasicData $cityBasicData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\CityBasicData  $cityBasicData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityBasicData $cityBasicData)
    {
        //
    }
}
