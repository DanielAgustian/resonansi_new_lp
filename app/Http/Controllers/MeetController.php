<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Spatie\GoogleCalendar\Event;

class MeetController extends Controller
{
    public function create(Request $request){

        $dateTimeString = $request->date." ".$request->time.":00";
        $dueDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $dateTimeString, 'Asia/Jakarta');
        // dd($request->all());
        $event = new Event;
        // FOR ADD EVENT IN GOOGLE CALENDAR
        $event->name = 'Request Bertemu AE oleh '.$request->name;
        $event->description = 'Hubungi untuk contact langsung:'.$request->input('landing-enquiry-idd').$request->phone ;
        $event->startDateTime = $dueDateTime;
        $event->endDateTime = $dueDateTime->addHour(2);
        $event->save();

        $capcha = $request->input('g-recaptcha-response');
        date_default_timezone_set("Asia/Bangkok");
        $agent = new Agent();
        if ($capcha == null) {
          return redirect()->back()->with('errorCapcha', 'errorCapcha');
        }
        if ($agent->isPhone()) {
            $screen = "Phone";
        } elseif ($agent->isTablet()) {
            $screen = "Tablet";
        } elseif ($agent->isDesktop()) {
            $screen = "Desktop";
        }
        //dd($request);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->input('landing-enquiry-idd').$request->phone,
            'status' => 'lead',
            'company'=> $request->company,
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

        return redirect()->back()->with('successMsg', 'Success');
    }

    public function makeContactUs(Request $request){
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
            'phone' => $request->phone_front.$request->phone,
            'company'=> $request->company,
            'status' => 'contact',
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
        $insertContact = DB::table('contact')->insertGetId([
          'client_id' => $userId,
          'message' => $request->message,
          'created_at'=> Carbon::now()

        ]);
        return redirect()->back()->with('successContact', 'Success');
    }
}
