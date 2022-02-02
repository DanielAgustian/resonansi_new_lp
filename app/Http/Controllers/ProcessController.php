<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProcessController extends Controller
{
    public function postActivity(Request $request)
    {
        date_default_timezone_set("Asia/Bangkok");

        DB::table('activities')->insert([
            'client_id' => $request->user_id,
            'admin_id' => $request->admin_id,
            'activity' => $request->activity,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->back();
    }

    public function processFollowUp(Request $request)
    {
        $activities = DB::table('activities')->where('client_id', $request->user_id)->orderBy('id', 'desc')->first();

        if ($activities) {
            DB::table('activities')->where('id', $activities->id)->update([
                'next_fu' => $request->next_fu
            ]);
        }

        return redirect()->back();
    }
}
