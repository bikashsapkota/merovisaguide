<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($title)
    {
        //

        $post = \App\Post::where('title',str_replace('-', ' ', $title))->first();
        return view('post.index', compact('post'));
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

        $post = new Post();

        if($request->country != null &&  $request->purpose !=null){
            $cv = new \App\CountryVisa(); //country visa
            $cv->country_id =  $request->country;
            $cv->visa_type_id = $request->purpose;
            $cv->rules = "null";
            $cv->steps = "null";
            $cv->save();
            $post->country_visa_id = $cv->id;
        }else{
            $post->country_visa_id = null;
        }
        
        $post->title = $request->title;
        $post->body = $request->post;
        $post->tags = $request->tags;
        
        $post->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $countries = \App\Country::all();
        $purposes = \App\VisaType::all();

        $cv = Post::join('country_visas','posts.country_visa_id','country_visas.id')
                        ->where('posts.id',$post->id)
                        ->select('country_id','visa_type_id','country_visas.id as cv_id')
                        ->first();

        //return $cv;
        return view('post.edit', compact('countries','purposes','post','cv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)    
    {
        //
        $post = Post::find($request->post_id);


        if($request->country != null &&  $request->purpose !=null){
            $cv =  \App\CountryVisa::find($request->cv_id); //country visa
            $cv->country_id =  $request->country;
            $cv->visa_type_id = $request->purpose;
            $cv->rules = "null";
            $cv->steps = "null";
            $cv->save();
            $post->country_visa_id = $cv->id;
        }else{
            $post->country_visa_id = null;
        }
        
        $post->title = $request->title;
        $post->body = $request->post;
        $post->tags = $request->tags;
        
        $post->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        //$post->delete();
        return redirect()->back()->withMessage('Post Deleted');
    }


    public function getRecent(){
        return Post::orderBy('created_at','desc')->take(10)->get();
    }

    public function getVisatype($country){
        return \App\CountryVisa::join('visa_types','country_visas.visa_type_id','visa_types.id')
                            ->select('visa_type_id','name')
                            ->where('country_visas.country_id',$country)
                            ->get()
                            ->unique('visa_type_id');
    }


    public function allposts()
    {
        //
        $posts = \App\Post::all();
        return view('post.allpost',compact('posts'));
    }
}
