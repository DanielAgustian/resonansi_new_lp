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
        $string  = "Blogs";
        $data['blogs'] = DB::table('blogs')
          ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
          ->where('blogStatus' , '=', 'active')
          ->orderBy('created_at', 'desc')
          ->paginate(6);
        $data['latest'] =  DB::table('blogs')
            ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
            ->where('blogStatus' , '=', 'active')
            ->orderBy('created_at', 'desc')
            ->limit(4)->get();
        // dd($data['latest']);
        // return view('pages.rehaul.coming-soon', compact('string'));
        return view('pages.rehaul.blogsV2', $data);
    }
    public function careerPageV2(){
      $string  = "Career";
        return view('pages.rehaul.careerV2');
    }
    public function blogsDetailPageV2($slug){
        $data['blog'] = DB::table('blogs')
            ->where('blogSlug', $slug)->first();
        
        $data['latest'] =  DB::table('blogs')
          ->select('blogs.blogTitle', 'blogs.blogSlug', 'blogs.blogContent', 'blogs.blogLike', 'blogs.blogRead', 'blogs.created_at', 'blogs.blogImage1', 'blogs.id', 'blogs.titleImage')
          ->where('blogStatus' , '=', 'active')
          ->whereNotIn('blogSlug', [$slug])
          ->orderBy('created_at', 'desc')
          ->limit(4)->get();
        
        $read= $data['blog']->blogRead;
        $update = DB::table('blogs')
         ->where('blogSlug', $slug)->update(['blogRead' => $read + 1]);
        //  dd($data);
        return view('pages.rehaul.blogs-detailV2', $data);
    }


}
