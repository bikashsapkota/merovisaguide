<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\VisaType;
use App\Post;
use App\CountryVisa;

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
        $countr = \App\Country::get();
        //return $country->count();
        $countries = CountryVisa::join('countries','country_visas.country_id','countries.id')->get()->unique('country_id');
        return view('welcome', compact('countries','countr'));
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

        return redirect('/post/'.str_replace(' ', '-', $countryVisaPost->title));


    }

    public function getRobot(){
        return Post::all();
    }

    public function showVisatype($country){
        $name = str_replace('-', ' ', $country);
        //$coun = Country::where('name',$name)->first();

        $visatypes = CountryVisa::join('countries','countries.id','country_visas.country_id')
                    ->where('countries.name', $name)
                    ->join('visa_types','country_visas.visa_type_id','visa_types.id')
                    ->select('visa_types.name','visa_types.id')
                    ->get();
        return view('country.index',compact('visatypes', 'name'));

    }


    public function showCountry($country){
        $name = str_replace('-', ' ', $country);
        //$coun = Country::where('name',$name)->first();

        $visatypes = CountryVisa::join('countries','countries.id','country_visas.country_id')
                    ->join('visa_types','country_visas.visa_type_id','visa_types.id')
                    ->where('visa_types.name', $name)
                    ->select('countries.name','countries.id')
                    ->get();
        return view('country.visatype',compact('visatypes', 'name'));

    }


}
