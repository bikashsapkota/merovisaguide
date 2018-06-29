<?php

namespace App\Http\Controllers;

use App\CountryVisa;
use Illuminate\Http\Request;

class CountryVisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('country.index');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CountryVisa  $countryVisa
     * @return \Illuminate\Http\Response
     */
    public function show(CountryVisa $countryVisa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CountryVisa  $countryVisa
     * @return \Illuminate\Http\Response
     */
    public function edit(CountryVisa $countryVisa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CountryVisa  $countryVisa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountryVisa $countryVisa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CountryVisa  $countryVisa
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountryVisa $countryVisa)
    {
        //
    }
}
