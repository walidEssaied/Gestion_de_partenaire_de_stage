<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    protected $guarded = [];
    
    public function societe (){
       
        return $this->belongsTo('App\societe');
    }
    public function stage()
    {
        return $this->hasMany('App\stage');
    }
}
