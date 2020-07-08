<?php

namespace App\Http\Controllers;

use App\application;
use App\member;
use App\contact;
use Illuminate\Http\Request;

class appController extends Controller
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
        $content=contact::find(1);
//        return view('controlPanel')->with('content',$content);
        return view('contact')->with('message',$messagee)->with('messagep',$messagep)->with('content',$content);

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
        if(!empty($m))
        {
            $g=new application();
            $g->phone=$request->phone;
            $g->email=$request->email;
            $g->location=$request->location;
            $g->package_id=$request->package_id;
            $g->status=$request->status;

            $g->save();

            if ($m->password!=$request->password){
                $messagep="* Invalid Password*";
                $messagee = " ";
            }
            else {
                $messagee = " ";
                $messagep = " ";
            }
        }
        else
        {
            $messagee="* Email not Found - Make account if you not register*";
            $messagep=" ";

        }
        $content=contact::find(1);
        return view('contact')->with('message',$messagee)->with('messagep',$messagep)->with('content',$content);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        //
        $content=application::all();
        return view('applications')->with('content',$content);
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
