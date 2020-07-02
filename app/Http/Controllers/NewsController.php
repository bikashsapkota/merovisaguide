<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
    	$news = \App\Post::where('type','news')->get();
        return view('news.index', compact('news'));
    }

    public function marathi() {
        return view('marathi');
    }
}
