<?php

namespace App;
use  App\MAcount;

use Illuminate\Database\Eloquent\Model;

class MType_Account extends Model
{
    protected $table='type_account';
    protected $primaryKey = "id";

    public function account()
    {
        return $this->hasMany('App\MAcount','fk_typeacc');
    }

}
