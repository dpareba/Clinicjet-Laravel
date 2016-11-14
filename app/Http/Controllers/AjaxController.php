<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminModel\City;
use App\AdminModel\State;
use App\AdminModel\Country;

class AjaxController extends Controller
{
    public function getState(Request $request)
    {

    	$countryid = $request['country_id'];

    	$states = State::where('country_id',$countryid)->get();
    	
    	return response()->json($states);
    }
    public function getCity(Request $request)
    {

    	$stateid = $request['state_id'];

    	$city = City::where('state_id',$stateid)->get();
    	
    	return response()->json($city);
    }

}
