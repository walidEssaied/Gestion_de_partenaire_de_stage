<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class societe_has_stage extends Model
{
    public function societe()
    {
        return $this->hasMany('App\societe');
    }
    public function stage()
    {
        return  $this->hasMany('App\stage');
    }
}
