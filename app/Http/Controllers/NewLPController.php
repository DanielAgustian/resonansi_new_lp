<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class NewLPController extends Controller
{
    //
    public function marketplacePageV2(Request $request){
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
        return view('pages.rehaul.lp.marketplace', compact('data', 'count', 'ref', 'so', 'campaign' ));
    }
    public function socMedPageV2(Request $request){
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
      return view('pages.rehaul.lp.social-media', compact('data', 'count', 'ref', 'so', 'campaign' ));
  }
  public function landingPageV2(Request $request){
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
      return view('pages.rehaul.lp.landing-page', compact('data', 'count', 'ref', 'so', 'campaign' ));
  }
  public function warehousePageV2(Request $request){
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
      return view('pages.rehaul.lp.warehouse', compact('data', 'count', 'ref', 'so', 'campaign' ));
  }
  public function conversionPageV2(Request $request){
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
      return view('pages.rehaul.lp.conversion', compact('data', 'count', 'ref', 'so', 'campaign' ));
  }
  public function digitalMarketingPageV2(Request $request){
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
      return view('pages.rehaul.lp.digital-marketing', compact('data', 'count', 'ref', 'so', 'campaign' ));
  }

}
