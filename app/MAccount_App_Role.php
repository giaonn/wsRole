<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MAccount_App_Role extends Model
{
    protected $table='account_app_role';
    public $timestamps = false;

    public function account(){
        return $this->belongsTo('App\MAcount','fk_account');
    }

    public function role(){
        return $this->belongsTo('App\MRole','fk_role');
    }

    public function app(){
        return $this->belongsTo('App\MApp','fk_app');
    }

}
