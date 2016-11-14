<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Brandname;
use App\AdminModel\Dosetype;

class BrandnameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bn = Brandname::all();
        $dt = Dosetype::all();
        
        return view('brandname.index',['bn'=>$bn,'dt'=>$dt]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bn = Brandname::all();
        $dt = Dosetype::all();
        return view('brandname.create',['bn'=>$bn,'dt'=>$dt]);        

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
                'BrandName' => 'required|max:10',
                'dosetype_id' => 'required'
                ]);
            $bn = new Brandname();
            $bn->BrandName = $request['BrandName'];
            $bn->dosetype_id = $request['dosetype_id'];
            $message = "There was an error";
            if($bn->save())
            {
                $message = "Brand Name successfully added";
            }
            return redirect()->route('brandname.index');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $bn = Brandname::find($id);
          $dt = Dosetype::find($bn->dosetype_id);
         return view('brandname.show',['bn'=>$bn,'dt'=>$dt]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $bn = Brandname::find($id);
          $dt = Dosetype::all();


         return view('brandname.edit',['bn'=>$bn,'dt'=>$dt]); 
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

        $bn = Brandname::find($id);
        $bn->update($request->all());
        return redirect()->route('brandname.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bn = Brandname::find($id);
        $bn->delete();
        return redirect()->route('brandname.index');
    }
}
