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
    
    public function landing(){
        $countries = Country::all();
        $visatypes = VisaType::all();
        return view('welcome', compact('countries','visatypes'));
    }

    public function landingToPost(Request $request){
        $country = $request->country;
        $visatype = $request->purpose;

        $countryVisaPost = \App\CountryVisa::where('country_id',$country)
                        ->join('posts','posts.country_visa_id','country_visas.id')

                        ->where('visa_type_id', $visatype)
                        ->first();

        if($countryVisaPost == null){
            return redirect('/#visa-type')->with('error','Particular Post Not found');
        }

        return redirect('/post/'.$countryVisaPost->title);


    }


}
