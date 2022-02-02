<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class MeetController extends Controller
{
    public function create(Request $request){
        // dd($request->all());
        date_default_timezone_set("Asia/Bangkok");
        $agent = new Agent();

        if ($agent->isPhone()) {
            $screen = "Phone";
        } elseif ($agent->isTablet()) {
            $screen = "Tablet";
        } elseif ($agent->isDesktop()) {
            $screen = "Desktop";
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 'lead',
            'ip_address' => \Request::ip(),
            'device' => $agent->device(),
            'platform' => $agent->platform(),
            'screen' => $screen,
            'version_platform' => $agent->version($agent->platform()),
            'browser' => $agent->browser(),
            'version_browser' =>  $agent->version($agent->browser()),
            'languages' => $agent->languages()[0],
            'created_at' =>  Carbon::now(),
        ];

        $userId = DB::table('client')->insertGetId($data);
        $insertMeet= DB::table('meet')->insertGetId([
            'client_id' => $userId,
            'tgl' => $request->date,
            'jam' => $request->time,
            'paket' => $request->landing_enquiry_paket
        ]);

        return redirect()->back();
    }
}
