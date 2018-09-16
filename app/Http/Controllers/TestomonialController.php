<?php

namespace App\Http\Controllers;

use App\Testomonial;
use Illuminate\Http\Request;

class TestomonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $testomonials = Testomonial::all();
        //return $enqueries;

        return view('testomonial.index',compact('testomonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('testomonial.create');
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

        if ($request->hasFile('input_img')) {
            if($request->file('input_img')->isValid()) {
                try {
                    $file = $request->file('input_img');
                    $name = time() . '.' . $file->getClientOriginalExtension();
                    $request->file('input_img')->move("img", $name);

                    $testomonial = new Testomonial();
                    $testomonial->description = $request->description;
                    $testomonial->photo = $name;
                    $testomonial->name = $request->name;
                    $testomonial->save();

                    return redirect()->back();

                } catch (Illuminate\Filesystem\FileNotFoundException $e) {
                    return "file not found";
                }
            }    
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testomonial $testomonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testomonial $testomonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testomonial $testomonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testomonial $testomonial)
    {
        //
        $testomonial->delete();
        //return $testomonial;
        return redirect()->back();
    }
}
