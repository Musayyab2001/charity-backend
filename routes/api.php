<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::Resource('citybasicdata', 'api\ApiCityBasicDataController');

Route::Resource('charityrecivers', 'api\ApiCharityReciverController');

Route::Resource('sponsors', 'api\ApiSponsorController');

Route::Resource('ergebnisse', 'api\ApiErgebnisseController');
