<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/patients','PatientController');

Route::resource('country','Admin\CountryController');

Route::resource('state','Admin\StateController');

Route::resource('city','Admin\CityController');

Route::resource('bgroup','Admin\BGController');

Route::resource('dosagegroup','Admin\DosagegroupController');

Route::resource('dosetype','Admin\DosetypeController');

Route::resource('brandname','Admin\BrandnameController');

Route::resource('clinictype','Admin\ClinictypeController');

Route::resource('clinicdetail','Admin\ClinicdetailController');

Route::resource('gender','Admin\GenderController');

Route::post('/getState','AjaxController@getState');

Route::post('/getCity','AjaxController@getCity');