<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Clinicdetail;
use App\AdminModel\Clinictype;
use App\AdminModel\Country;
use App\AdminModel\State;
use App\AdminModel\City;

class ClinicdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinicdetail = Clinicdetail::all();
        
        return view('clinicdetail.index',['clinicdetail'=>$clinicdetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clinictype = Clinictype::all();
        $country = Country::all();
        return view('clinicdetail.create',['clinictype'=>$clinictype,'country'=>$country]);
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
                'ClinicName' => 'required|max:1000',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'clinictype_id' => 'required'
                ]);
            $clinicdetail = new Clinicdetail();
            $clinicdetail->ClinicName = $request['ClinicName'];
            $clinicdetail->country_id = $request['country_id'];
            $clinicdetail->state_id = $request['state_id'];
            $clinicdetail->city_id = $request['city_id'];
            $clinicdetail->clinictype_id = $request['clinictype_id'];
            $message = "There was an error";
            if($clinicdetail->save())
            {
                $message = "Clinic Detail successfully added";
            }
            return redirect()->route('clinicdetail.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clinicdetail = Clinicdetail::find($id);

        return view('clinicdetail.show',['clinicdetail'=>$clinicdetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinicdetail = Clinicdetail::find($id);
        $country = Country::all();
        $state = State::all();
        $city = City::all();
        $clinictype = Clinictype::all();

        return view('clinicdetail.edit',['clinicdetail'=>$clinicdetail,'country'=>$country,'state'=>$state,'city'=>$city,'clinictype'=>$clinictype]);

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
                'ClinicName' => 'required|max:1000',
                'country_id' => 'required',
                'state_id' => 'required',
                'city_id' => 'required',
                'clinictype_id' => 'required'
                ]);
            $clinicdetail = Clinicdetail::find($id);
 
            if($clinicdetail->update($request->all()))
            {
                $message = "Clinic Detail successfully Modified";
            }
            return redirect()->route('clinicdetail.index');            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clinicdetail = Clinicdetail::find($id);

        $clinicdetail->delete();

        return view('clinicdetail.index');
    }
}
