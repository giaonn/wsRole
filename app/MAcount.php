<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MAcount extends Model
{
    protected $table='account';
//  public $timestamps=false;

    public function type_account(){

        return $this->belongsTo('App\MType_Account','fk_typeacc');
    }

    public function account_app_role(){
        return $this->hasMany('App\MAccount_App_Role','fk_account');
    }



}
