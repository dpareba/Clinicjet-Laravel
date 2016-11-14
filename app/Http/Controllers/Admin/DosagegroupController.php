<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Dosagegroup;

class DosagegroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dg = Dosagegroup::all();
        return view('dosagegroup.index',['dg'=>$dg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosagegroup.create');
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
            'dosagegroup' => 'required|max:100'
            ]);
        $dg = new Dosagegroup();
        $dg->DosageGroup = $request['dosagegroup'];
        $message = "There was an error";
        if($dg->save())
        {
            $message = "Dosage Group successfully added";
        }
        return redirect()->route('dosagegroup.index');       


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $dg = Dosagegroup::find($id);
        return view('dosagegroup.show',['dg'=>$dg]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dg = Dosagegroup::find($id);

        return view('dosagegroup.edit',['dg'=>$dg]);
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
            $dg = Dosagegroup::find($id);
            $dg->update($request->all());

            return redirect()->route('dosagegroup.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $dg = Dosagegroup::find($id);
        $dg->delete();
        return redirect()->route('dosagegroup.index');

    }
}
