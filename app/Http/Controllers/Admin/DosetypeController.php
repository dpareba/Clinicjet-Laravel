<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Dosetype;
use App\AdminModel\Dosagegroup;

class DosetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dt = Dosetype::all();
        $dg = Dosagegroup::all();

        return view('dosetype.index',['dt'=>$dt,'dg'=>$dg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dt = Dosetype::all();
        $dg = Dosagegroup::all();
        return view('dosetype.create',['dt'=>$dt,'dg'=>$dg]);        
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
                'dosetype' => 'required|max:10',
                'doseagegroup_id' => 'required'
                ]);
            $dt = new Dosetype();
            $dt->DoseType = $request['dosetype'];
            $dt->dosagegroup_id = $request['doseagegroup_id'];
            $message = "There was an error";
            if($dt->save())
            {
                $message = "Dose Type successfully added";
            }
            return redirect()->route('dosetype.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $dt = Dosetype::find($id);
          $dg = Dosagegroup::find($dt->dosagegroup_id);
         return view('dosetype.show',['dt'=>$dt,'dt'=>$dt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $dt = Dosetype::find($id);
          $dg = Dosagegroup::all();


         return view('dosetype.edit',['dt'=>$dt,'dg'=>$dg]); 

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
        $dt = Dosetype::find($id);
        $dt->update($request->all());
        return redirect()->route('dosetype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dt = Dosetype::find($id);
        $dt->delete();
        return redirect()->route('dosetype.index');
    }
}
