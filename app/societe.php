<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class societe extends Model
{
    public function etudiant()
    {
        return $this->hasMany('App\etudiant');
    }
}
