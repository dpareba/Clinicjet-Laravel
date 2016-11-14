<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AdminModel\Bloodgroup;
class BGController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bg = Bloodgroup::all();

        return view('bgroup.index',['bg'=>$bg]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bgroup = new Bloodgroup();
        return view('bgroup.create',['bgroup'=>$bgroup]);        
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
                'bloodgroup' => 'required|max:10'
                ]);
            $bloodgroup = new Bloodgroup();
            $bloodgroup->BloodGroup = $request['bloodgroup'];
            $message = "There was an error";
            if($bloodgroup->save())
            {
                $message = "Blood Group successfully added";
            }
            return redirect()->route('bgroup.index');        //        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
         $bg = Bloodgroup::find($id);
        return view('bgroup.show',['bg'=>$bg]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $bg = Bloodgroup::find($id);
         return view('bgroup.edit')->with('bg',$bg);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $bg = Bloodgroup::find($id);
            $bg->update($request->all());

            return redirect()->route('bgroup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $bg = Bloodgroup::find($id);
        $bg->delete();
        return redirect()->route('bgroup.index');

    }
}
