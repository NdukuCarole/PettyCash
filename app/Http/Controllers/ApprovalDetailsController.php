<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApprovalDetailsController extends Controller
{
    public function index(){
        $users = DB::select('select * from approval_details');
        return view('approve_view',['users'=>$users]);
        }
}
