<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hamster extends Model
{
    protected $fillable = ['name'];

    /*
    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('role');
    }
    */

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
