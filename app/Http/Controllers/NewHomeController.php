<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class NewHomeController extends Controller
{
    //
    public function homepageV2(){

        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        $ref = "";
        $so = "";
        $campaign = "";
        if($request->ref != null){
        $ref = $request->ref;
        }
        if($request->so != null){
        $so = $request->so;
        }
        if ($request->campaign != null) {
            $campaign = $request->campaign;
        }
        return view('pages.rehaul.homepageV2', compact('data', 'count', 'ref', 'so', 'campaign' ));
    }
    public function pricingPageV2(){

        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        $ref = "";
        $so = "";
        $campaign = "";
        if($request->ref != null){
        $ref = $request->ref;
        }
        if($request->so != null){
        $so = $request->so;
        }
        if ($request->campaign != null) {
            $campaign = $request->campaign;
        }
        return view('pages.rehaul.pricingV2', compact('data', 'count', 'ref', 'so', 'campaign' ));
    }
    public function contactUsV2(){
        return view('pages.rehaul.contact-usV2');
    }
    public function servicePageV2(){

        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        $ref = "";
        $so = "";
        $campaign = "";
        if($request->ref != null){
        $ref = $request->ref;
        }
        if($request->so != null){
        $so = $request->so;
        }
        if ($request->campaign != null) {
            $campaign = $request->campaign;
        }
        return view('pages.rehaul.serviceV2', compact('data', 'count', 'ref', 'so', 'campaign' ));
    }
    public function aboutPageV2(){

        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        $ref = "";
        $so = "";
        $campaign = "";
        if($request->ref != null){
        $ref = $request->ref;
        }
        if($request->so != null){
        $so = $request->so;
        }
        if ($request->campaign != null) {
            $campaign = $request->campaign;
        }
        return view('pages.rehaul.about-usV2', compact('data', 'count', 'ref', 'so', 'campaign' ));
    }
    public function blogsPageV2(){
        return view('pages.rehaul.coming-soon');
    }
    public function careerPageV2(){
        return view('pages.rehaul.coming-soon');
    }
}
