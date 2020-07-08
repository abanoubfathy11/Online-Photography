<?php

namespace App\Http\Controllers;

use App\member;
use App\review;
use Illuminate\Http\Request;

class reviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $message=" ";
        $con=review::all();
        return view('review')->with('message',$message)->with('con',$con);
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
            $g=new review();
            $g->content=$request->data;
            $g->email=$request->email;

            $g->save();

            $message=" ";
            $con=review::all();
        }
        else
        {
            $con=review::all();
            $message="* Email not Found - Make account if you not register*";
        }

        return view('review')->with('message',$message)->with('con',$con);

    }
    public function check(Request $request){
        $m=member::find($request->email);
        if($m)
            return true;
        else
            return false;
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

    public function showAll()
    {
        $con=review::all();
        $message=" ";
        return view('review')->with('con',$con)->with('message',$message);
//        return view('show',compact('emp'));
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
