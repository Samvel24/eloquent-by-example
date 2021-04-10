<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HamsterController extends Controller
{
    public function metodoRelacionVsPropiedadDinamica()
    {
        echo "gerbils usando metodo de relacion: " . "<br>";
        echo \App\User::find(1)->gerbils()->get(); // gerbils() es el metodo de relacion definido en el modelo User
        echo "<br>";

        /* 
            gerbils en la siguiente instruccion se conoce como propiedad dinámica. 
            Si por ejemplo, se consultan varios usuarios y de cada uno se desea obtener sus hamsters,
            lo podemos hacer con un foreach y usar la propiedad dinámica; esta realizaría una 
            nueva consulta de los 'gerbils' por cada uno de los usuarios recorridos. 
            Este problema se conoce como "N+1"
        */
        $users = \App\User::get();
        echo "gerbils usando propiedad dinamica: " . "<br>";
        echo \App\User::find(1)->gerbils; 
    }

    public function nombresUsuariosHamster()
    {
        $hamsters = \App\Hamster::get();
        foreach($hamsters as $hamster)
        {
            echo $hamster->user()->first()->name . "<br>";
        }

        echo "<br>" . "<br>";
        $hamsters = \App\Hamster::with('user')->get(); // La sintaxis with('user') se refiere al metodo user() en el modelo Hamster
        foreach ($hamsters as $hamster)
        {
            echo $hamster->user()->first()->name . "<br>";
        }
    }
}
