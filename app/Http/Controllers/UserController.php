<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userDetail($id){
        $client = DB::table('client')->where('id', $id)->first();
        $activities = DB::table('activities')->join('client', 'client.id', 'activities.cleint_id')
        ->where('activities.user_id', $id)
        ->select('users.name', 'activities.activity','activities.created_at','activities.updated_at')
        ->orderBy('activities.created_at', 'desc')->get();

        return view('admin.user-detail', [
            'user' => $client,
            'activities' => $activities
        ]);
    }
}
