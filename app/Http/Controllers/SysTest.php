<?php

namespace App\Http\Controllers;

use App\MAccount_App_Role;
use App\MAcount;
use Illuminate\Http\Request;

class SysTest extends Controller
{
    //

    public function sysHandle(Request $request)
    {
        $iduser = $request->iduser;
        $idrole = $request->idrole;
        $idapp = $request->idapp;


        $appWithUser = MAcount::find($iduser)->account_app_role;
//        for($i=0;$i<count($appWithUser);$i++){
//            echo 'app: '.$appWithUser[$i]['fk_app'].'<br>';
//        }
        if ($this->is_Has_Role_On_App($appWithUser, $idapp)) {
            echo 'App đã tồn tại role với user này';
        } else {
//              $user_app_role = new MAccount_App_Role();
//              $user_app_role->fk_account=$iduser;
//              $user_app_role->fk_app=$idapp;
//              $user_app_role->fk_role=$idrole;
//
//              $user_app_role->save();
            echo 'Saved';
        }


    }

    public function is_Has_Role_On_App($appWithUser, $idapp)
    {
        foreach ($appWithUser as $app) {
            if ($app->fk_app == $idapp) {
                return true;
            }
        }
        return false;
    }

}
