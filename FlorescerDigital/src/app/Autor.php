<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

    protected $fillable = [
        'name',
    ];

    public function project(){
        return $this->hasOne('App\Project');
    }
}
