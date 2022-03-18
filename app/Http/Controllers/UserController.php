<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CRUDBooster;

class UserController extends Controller
{
    public function userDetail($id){
        $client = DB::table('client')->where('id', $id)->first();
        $activities = DB::table('activities')->join('client', 'client.id', 'activities.client_id')
        ->where('activities.client_id', $id)
        ->select('client.name', 'activities.activity','activities.created_at','activities.updated_at')
        ->orderBy('activities.created_at', 'desc')->get();

        return view('admin.user-detail', [
            'user' => $client,
            'activities' => $activities
        ]);
    }

    public function updateStatus(Request $request, $id){
        $data = [
            'status' => $request->status,
            'admin_id' => CRUDBooster::myId()
        ];
        $user = DB::table('client')->where('id', $id)->update($data);

        if ($request->status == 'lead') {
            return redirect()->route('userDetail', [$id]);
        } else if ($request->status == 'contact') {
            return redirect()->route('userContactDetail', [$id]);
        } else if ($request->status == 'potential') {
            return redirect()->route('userPotentialDetail', [$id]);
        } else if ($request->status == 'win') {
            return redirect()->route('userWinDetail', [$id]);
        } else {
            return redirect()->route('userLoseDetail', [$id]);
        }
    }

    public function adminDashboard(){
      if (!CRUDBooster::isView()) {
        return redirect()->away('https://resonansi.co.id/admin/login');
      }
      $dataMeet = DB::table('client')->join('meet', 'client.id', '=', 'meet.client_id');
      $jumlahKlien = $dataMeet->count();
      $jumlahLead  = $dataMeet->where('client.status', 'lead')->count();
      $jumlahWin  = $dataMeet->where('client.status', 'win')->count();
      $jumlahLose = $dataMeet->where('client.status', 'lose')->count();
      $jumlahContact = DB::table('contact')->count();

      return view('admin.dashboard', [
        'jumlahKlien'=> $jumlahKlien,
        'jumlahLead'=> $jumlahLead,
        'jumlahContact'=> $jumlahContact,
        'jumlahWin'=> $jumlahWin,
        'jumlahLose'=> $jumlahLose,
      ]);
    }
}
