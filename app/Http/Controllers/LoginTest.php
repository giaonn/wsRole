<?php

namespace App\Http\Controllers;

use App\MAccount_App_Role;
use App\MAcount;
use App\MApp;
use App\MRole;
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

    public function checkUser(Request $request)
    {
        $lstAcc = MAcount::all()->toArray();
        $lstApp = MApp::all()->toArray();
        $lstRole = MRole::all()->toArray();
        $userGet = $request->user;
        $passGet = $request->pass;

        for ($i = 0; $i < count($lstAcc); $i++) {

            if ($lstAcc[$i]['user'] == $userGet && $lstAcc[$i]['pass'] == $passGet) {
                if ($lstAcc[$i]['fk_typeacc'] == 1) {
                    return view('formSys', ['user' => $lstAcc, 'app' => $lstApp, 'role' => $lstRole]);
                } else if ($lstAcc[$i]['fk_typeacc'] == 2) {
                    return view('formClientAdmin');
                } else if ($lstAcc[$i]['fk_typeacc'] == 3) {
                    return view('formApproval');
                } else if ($lstAcc[$i]['fk_typeacc'] == 4) {
                    return view('formCommit');
                } else if ($lstAcc[$i]['fk_typeacc'] == 5) {
                    $accId = $lstAcc[$i]['id'];
                    $lstAcc_app_role = MAcount::find($accId)->account_app_role;

                    $lstappget = array();

                    foreach ($lstAcc_app_role as $son) {
                        $lstappget[] = MAccount_App_Role::find($son->id)->app;
                    }

                    return view('formViewer', ['lstApp' => $lstappget]);
                }
            }

        }
        return 'Sai tên đăng nhập';
    }

    public function pushlstUser(Request $request)
    {

        $lstAcc = MAcount::all()->toArray();
        $lstApp = MApp::all()->toArray();
        $lstRole = MRole::all()->toArray();

        return view('formSys', ['user' => $lstAcc, 'app' => $lstApp, 'role' => $lstRole]);

    }


}
