<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiant_has_stage extends Model
{
    public function etudiant()
    {
       return  $this->hasMany('App\etudiant');
       
    }

    public function stage()
    {
        return  $this->hasMany('App\stage');
    }

}
