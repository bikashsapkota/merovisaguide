<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmbassyController extends Controller
{
    public function index()
    {
        return view('embassy');
    }
}
