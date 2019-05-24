<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('basic', 'CityBasicDataController');
Route::post('basic', 'CityBasicDataController@updateBasicData');

Route::resource('spendenempfaenger', 'CharityReciverController');
Route::post('spendenempfaenger', 'CharityReciverController@imageUploadPost')->name('image.upload.post');
// Route::post('spendenempfaenger/{id}', 'CharityReciverController@destroy');
// Route::post('spendenempfaenger', 'CityBasicDataController@updateBasicData');
