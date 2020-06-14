<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class demande extends Model
{
    public function user (){
       
        return $this->hasOne('App\user');
    }
    public function stage (){
       
        return $this->hasOne('App\stage');
    }
}
