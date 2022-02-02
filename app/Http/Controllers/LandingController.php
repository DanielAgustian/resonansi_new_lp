<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function homepage(){
        return view('pages.homepage');
    }
    public function homepage2(){
        return view('pages.homepage-new');
    }
    public function landing(){
        return view('pages.landing');
    }
    public function aboutPage(){
        return view('pages.about-us');
    }
    public function pricingPage(){
        return view('pages.pricing');
    }
    public function servicePage(){
        return view('pages.services');
    }
}
