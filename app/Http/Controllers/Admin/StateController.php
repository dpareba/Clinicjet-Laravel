<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminModel\state;
use App\AdminModel\country;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StateName = state::all();
        //$CountryName = $StateName->states;
        //dd($CountryName);
        return view('state.index',['StateName'=>$StateName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $country = country::pluck('CountryName','id');

        return view('state.create',['country'=>$country]);
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
                'addstate' => 'required|max:1000'
                ]);
            $addstate = new state();
            $addstate->StateName = $request['addstate'];
            $addstate->country_id = $request['countryid'];
            $message = "There was an error";
            if($addstate->save())
            {
                $message = "State successfully added";
            }
            return redirect()->route('state.index');        //        
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
          $state = state::find($id);
          $country = country::pluck('CountryName','id');


         return view('state.edit')->withState($state)->
         withCountry($country);

         
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
        $country = country::find($id);
       $country->update($request->all());

       return redirect()->route('country.index');
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
