<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MRole extends Model
{
    protected $table='role';
    public $timestamps = false;

    public function account_app_role(){
        return $this->hasMany('App\MAccount_App_Role','fk_role');
    }


}
