<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ApprovalDetails;

class ApprovalInsertController extends Controller
{
    public function insertform(){
        return view('approve');
        }
        public function insert(Request $request){
        $name = $request->input('name');
        $paybill = $request->input('paybill');
        $money = $request->input('money');


        $data=array('name'=>$name,"paybill"=>$paybill,"money"=>$money,);
        DB::table('approval_details')->insert($data);
       return redirect('/requests');
        }

        public function currentrequests(){
            $approvals = ApprovalDetails::get();

            return view('client.currentrequest',['users'=>$approvals]);
        }

}
