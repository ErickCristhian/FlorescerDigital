<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'status', 'description'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
