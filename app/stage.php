<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stage extends Model
{
    protected $guarded =[];
    // protected $fillable = ['type'];
    // protected $guarded = ['id']; 

    // protected $guarded = [''];
    public function etudiant()
    {
       return  $this->hasMany('App\etudiant');
       
    }
    public function societe()
    {
        return $this->hasMany('App\societe');
    }
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
