<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminActionController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function index1()
    {
        return view('home/index');
    }

    public function minor()
    {
        return view('home/minor');
    }
}
