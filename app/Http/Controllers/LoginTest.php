<?php

namespace App\Http\Controllers;

use App\MAcount;
use Illuminate\Http\Request;

class LoginTest extends Controller
{
    public function addUser(Request $request)
    {
        $user = new MAcount();
        $user->user = $request->user;
        $user->pass = $request->pass;
        $user->save();
        return 'Added';
    }

    public function checkUser(Request $request){
        $lstAcc = MAcount::all()->toArray();
        $userGet=$request->user;
        $passGet=$request->pass;

        for($i=0; $i<count($lstAcc); $i++){
            if($lstAcc[$i]['user'] == $userGet && $lstAcc[$i]['pass'] == $passGet) {
                return 'true';
            }
        }
        return 'false';
    }
}
