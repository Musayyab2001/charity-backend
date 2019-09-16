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
Route::post('spendenempfaenger', 'CharityReciverController@imageUploadPost')->name('speden.image.upload.post');

Route::resource('sponsoren', 'SponsorController');
Route::post('sponsoren', 'SponsorController@imageUploadPost')->name('sponsor.image.upload.post');

// Route::get('/csv', 'CsvFileController@upload')->name('csv');

Route::get('upload-csv', 'CsvFileController@index');
Route::post('/upload-csv', 'CsvFileController@upload')->name('csv.file.upload.post');

Route::get('/ergebnisse', 'ErgebnisseController@getErgebnisse')->name('ergebnisse');

Route::get('urkunde', 'UrkundeController@index');
Route::post('/urkunde', 'UrkundeController@createUrkunde')->name('create.urkunde.pdf');

Route::get('urkunde-template/{startnumber}/{stadt}', 'UrkundeTemplateController@index');
