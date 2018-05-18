<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\VisaType;

class AdminActionController extends Controller
{
    //
    public function index(){
        $countries = Country::all();
        $purposes = VisaType::all();
        return view('layouts.admin.index', compact('countries','purposes'));
    }

}
