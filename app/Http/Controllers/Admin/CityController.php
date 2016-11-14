<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminModel\City;
use App\AdminModel\State;
use App\AdminModel\Country;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cityname = City::all();
        return view('city.index',['cityname'=>$cityname]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        $state = State::all();

        return view('city.create',['country'=>$country,'state'=>$state]);
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
        $this->validate($request,[
                'CityName' => 'required|max:1000',
                'country_id' => 'required',
                'state_id' => 'required'
                ]);
            $cityname = new City();
            $cityname->CityName = $request['CityName'];
            $cityname->country_id = $request['country_id'];
            $cityname->state_id = $request['state_id'];
            $message = "There was an error";
            if($cityname->save())
            {
                $message = "State successfully added";
            }
            return redirect()->route('city.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

          $city = City::find($id);
          $state = State::where('country_id',$city->country_id)->get();
          $country = Country::all();


         return view('city.edit',['city'=>$city,'state'=>$state,'country'=>$country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'CityName' => 'required|max:1000',
                'country_id' => 'required',
                'state_id' => 'required'
                ]);
        $city = City::find($id);
         $city->update($request->all());
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
