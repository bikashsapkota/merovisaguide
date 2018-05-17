<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\VisaType;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function index1()
    {
        return view('home/index');
    }

    public function minor()
    {
        $countries = Country::all();
        $purposes = VisaType::all();
        return view('home/minor', compact('countries','purposes'));
    }

    public function landing(){
        $countries = Country::all();
        $visatypes = VisaType::all();
        return view('welcome', compact('countries','visatypes'));
    }


}
