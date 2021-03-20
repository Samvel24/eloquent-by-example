<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    function scopeAgeGreaterThan($query, $age) // scope = alcance o ambito
    {
        return $query->where('age', '>', $age);
    }

    function dogsRequiringAntiRabbitBiteShot() // perros que requieren inyección anti-mordida de conejo
    {
        return $this->ageGreaterThan(6);
    }
}
