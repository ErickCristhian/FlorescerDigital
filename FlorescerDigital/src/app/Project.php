<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'status', 'description', 'autor_id'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function autores(){
        return $this->belongsTo('App\Autor', 'id');
    }
}
