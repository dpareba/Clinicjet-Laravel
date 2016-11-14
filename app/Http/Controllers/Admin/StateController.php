<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminModel\State;
use App\AdminModel\Country;

class StateController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StateName = State::all();

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
        
        $country = Country::all();

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
          $state = State::find($id);
          $country = Country::find($state->country_id);
         return view('state.show',['state'=>$state,'country'=>$country]);
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
          $country = country::all();


         return view('state.edit',['state'=>$state,'country'=>$country]);
         
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

        $state = state::find($id);
         $state->update($request->all());
        return redirect()->route('state.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $state = State::find($id);
        $state->delete();
        return redirect()->route('state.index');
    }
}
