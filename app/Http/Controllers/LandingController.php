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
}
