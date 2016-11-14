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
                if($lstAcc[$i]['fk_typeacc']==1){
                       return view('formSys',['a'=>$lstAcc[$i]['fk_typeacc'],'b'=>$lstAcc[$i]['user']]);
                }else if($lstAcc[$i]['fk_typeacc']==5){
                       return view('formViewer',['a'=>$lstAcc[$i]['fk_typeacc']]);
                }

            }

        }
        return 'false';
    }

    public function  pushlstUser(Request $request){

        $lstAcc=MAcount::all()->toArray();

       return view('formSys',['user'=>$lstAcc]);

    }



}
