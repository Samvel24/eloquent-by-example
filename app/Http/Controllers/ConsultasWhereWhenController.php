<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultasWhereWhenController extends Controller
{
    public function consultaWhere()
    {
        $dogs = \DB::table('dogs'); // QueryBuilder

        $ageGroup = 'older';

        if ($ageGroup == 'older')
        {
            $dogs->where('age', '>', 8);
        }
        else
        {
            $dogs->where('age', '<', 8);
        }

        return $dogs->get();
    }

    public function consultaWhen()
    {
        $ageGroup = 'older';
        $dogs = \App\Dog::select('name', 'age') // Eloquent
            ->when($ageGroup == 'older',
                function($q)
                {
                    return $q->where('age','>', 8);
                },
                function($q)
                {
                return $q->where('age','<', 8);
                }
        );

        return $dogs->get();
    }
}