<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use SoftDeletes;

class Dog extends Model
{
    //protected $dates = ['deleted_at'];
    protected $dates = ['birthday'];

    function scopeAgeGreaterThan($query, $age) // scope = alcance o ambito
    {
        return $query->where('age', '>', $age);
    }

    function dogsRequiringAntiRabbitBiteShot() // perros que requieren inyección anti-mordida de conejo
    {
        return $this->ageGreaterThan(6);
    }

    /*protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 8);
        });
    }*/

    function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    function getIdNameAttribute()
    {
        return $this->attributes['id'] . ':' . $this->attributes['name'];
    }

    function setNameAttribute($value)
    {
        return $this->attributes['name'] = strtoupper($value);
    }
}
