<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MApp extends Model
{
    protected $table='app';

    public function account_app_role(){
        return $this->hasMany('App\MAccount_App_Role','fk_app');
    }
}
