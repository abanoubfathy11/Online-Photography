<?php

namespace App\Http\Controllers;

use App\gallary;
use Illuminate\Http\Request;

class uploadefileController extends Controller
{

    public function index()
    {
       return view('uploadfile');
    }

    function uploade (Request $request)
    {
        $this->validate($request,[
            'select_file' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $image=$request->file('select_file');
        $new_name=rand() . '.' . $image-> getClientOriginalExtension();
        $image->move(public_path("images"),$new_name);

        $g=new gallary();
        $g->title=$request->title;
        $g->description=$request->description;
        $str="images/".$new_name;
        $g->path=$str;
        $g->package_id=$request->package_id;
        $g->member_id=0;
        $g->save();

        return back()->with('success','image uploaded successfully')->with('path',$new_name);
    }


    public function create()
    {
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
//        $this->validate($request,[
//            'select_file' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048'
//        ]);
//        $image=$request->file('select_file');
//        $new_name=rand() . '.' . $image-> getClientOriginalExtension();
//        $image->move(public_path("images"),$new_name);
//        return back()->with('success','image uploaded successfully')->with('path',$new_name);

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
