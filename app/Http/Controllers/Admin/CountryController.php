<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdminModel\Country;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CountryName = country::all();
        return view('country.index',['CountryName'=>$CountryName]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $country = new country();
        return view('country.create',['country'=>$country]);
    

    }

    /**
     * Store a newly created resource in storage.
     *$this->validate($request,[
            'body' => 'required|max:1000'
            ]);
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'CountryName' => 'required|max:1000'
                ]);
            $addcountry = new country();
            $addcountry->CountryName = $request['CountryName'];
            $message = "There was an error";
            if($addcountry->save())
            {
                $message = "Country successfully added";
            }
            return redirect()->route('country.index');        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = country::find($id);
        return view('country.show',['country'=>$country]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $country = country::find($id);
         return view('country.edit')->with('country',$country);
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
        // print_r($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = country::find($id);
        $country->delete();
        return redirect()->route('country.index');
    }
}
