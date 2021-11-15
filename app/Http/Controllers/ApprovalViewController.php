<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ApprovalDetails;

class ApprovalViewController extends Controller
{
    //
    public function index(){
        $approvals = ApprovalDetails::all();
        return view('approve_view',['users'=>$approvals]);
        }

        public function approve($id){
            $approvals = ApprovalDetails::find($id);
            $approvals->approved_at = now();
            $approvals->save();
            return redirect('/view-records');
        }
}
