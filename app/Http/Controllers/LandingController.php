<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class LandingController extends Controller
{
    //
    public function homepage(){
        return view('pages.homepage');
    }
    public function homepage2(){

        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        return view('pages.homepage-new',compact('data', 'count'));
    }
    public function landing(Request $request){
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

        // dd($data, $count);
        return view('pages.landing', compact('data', 'count', 'ref', 'so', 'campaign'));
    }
    public function aboutPage(){
        return view('pages.about-us');
    }
    public function pricingPage(){
        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        return view('pages.pricing',compact('data', 'count') );
    }
    public function servicePage(){
        $data = DB::table('paket_resonansi')->where('status', '1')->get();
        $count = count($data);
        return view('pages.services',compact('data', 'count'));
    }
    public function contactPage(){
        return view('pages.contact-us');
    }
    public function blogsPage(){
        return view('pages.blogs');
        // return view('pages.blogs');
    }
    public function karirPage(){
      return view('pages.blogs');
    }

    // Landing Service Controllers
    public function marketplacePage(Request $request){
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
      return view('pages.landing-service.marketplace',compact('data', 'count', 'ref', 'so', 'campaign'));
    }
    public function socmedPage(Request $request){
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
      return view('pages.landing-service.socmed' ,compact('data', 'count', 'ref', 'so', 'campaign'));
    }
    public function landingPPage(Request $request){
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
      return view('pages.landing-service.landing-page' ,compact('data', 'count', 'ref', 'so', 'campaign'));
    }
    public function warehousePage(Request $request){
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
      return view('pages.landing-service.warehouse' ,compact('data', 'count', 'ref', 'so', 'campaign'));
    }
    public function conversionPage(Request $request){
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
      return view('pages.landing-service.conversion' ,compact('data', 'count', 'ref', 'so', 'campaign'));
    }
}
