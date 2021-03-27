<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use SoftDeletes;

class Dog extends Model
{
    protected $dates = ['deleted_at'];

    function scopeAgeGreaterThan($query, $age) // scope = alcance o ambito
    {
        return $query->where('age', '>', $age);
    }

    function dogsRequiringAntiRabbitBiteShot() // perros que requieren inyección anti-mordida de conejo
    {
        return $this->ageGreaterThan(6);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 8);
        });
    }
}
