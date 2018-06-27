<?php

namespace App\Http\Controllers;

use App\Enquery;
use Illuminate\Http\Request;

class EnqueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $enqueries = Enquery::all();
        //return $enqueries;

        return view('enquery.index',compact('enqueries'));
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
        $enquery = new Enquery();
        $enquery->full_name = $request->full_name;
        $enquery->phone_no = $request->phone_no;
        $enquery->email = $request->email;
        $enquery->address = $request->address;
        $enquery->country = $request->country;
        $enquery->purpose = $request->purpose;
        $enquery->message = $request->message;
        $enquery->status =  $request->status;
        $enquery->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enquery  $enquery
     * @return \Illuminate\Http\Response
     */
    public function show(Enquery $enquery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enquery  $enquery
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquery $enquery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enquery  $enquery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquery $enquery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enquery  $enquery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquery $enquery)
    {
        //
    }
}
