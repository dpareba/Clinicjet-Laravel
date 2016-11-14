<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Clinictype;

class ClinictypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinictype = Clinictype::all();

        return view('clinictype.index',['clinictype'=>$clinictype]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('clinictype.create'); 

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
            'ClinicType' => 'required|max:100'
            ]);
        $clinictype = new Clinictype();
        $clinictype->ClinicType = $request['ClinicType'];
        $message = "There was an error";
        if($clinictype->save())
        {
            $message = "Clinic Type successfully added";
        }
        return redirect()->route('clinictype.index');       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $clinictype = Clinictype::find($id);
        return view('clinictype.show',['clinictype'=>$clinictype]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clinictype = Clinictype::find($id);

        return view('clinictype.edit',['clinictype'=>$clinictype]);
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
           $clinictype = Clinictype::find($id);
            $clinictype->update($request->all());

            return redirect()->route('clinictype.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $clinictype = Clinictype::find($id);
        $clinictype->delete();
        return redirect()->route('clinictype.index');
    }
}
