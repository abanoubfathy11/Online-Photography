<?php

namespace App\Http\Controllers;

use App\application;
use App\member;
use App\review;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messagee=" ";
        $messagep=" ";
        return view('contact')->with('message',$messagee)->with('messagep',$messagep);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $m=member::find($request->email);
        $con=review::all();
        if(empty($m))
        {
            $g=new member();

            $g->phone=$request->phone;
            $g->name=$request->name;
            $g->email=$request->email;
            $g->address=$request->address;
            $g->password=$request->password;


            $g->save();

                $messagee = " ";
                $messagep = " ";

        }
        else
        {
            $messagee="* Email already Exist*";
            $messagep=" ";

        }
        return view('review')->with('message',$messagee)->with('messagep',$messagep)->with('con',$con);
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
    public function update(Request $request, $id)
    {
        //
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
