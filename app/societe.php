<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class societe extends Model
{
    protected $fillable = ['nom','emal','adresse','tel',];
    // protected $guarded =['*'];
    public function etudiant()
    {
       return  $this->hasMany('App\etudiant');
       
    }
    
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
