<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /*
        Teoria: Una colección es una clase de Laravel (version 5.5) que implementa la 
        interfaz nativa php ArrayAccess que permite crear objetos (ArrayObject) que funcionan como arrays
    */
    public function devolucionUnicaVsDevolucionmultiple()
    {
        // Devolucion unica (devuelve mismo resultado para las 3 instrucciones) (Devuelven de objeto de tipo App\User)
        echo \App\User::find(1) ."<br>"; 
        echo \App\User::whereId(1)->first() ."<br>";
        echo \App\User::all()->first() ."<br>";

        echo "<br>" . "<br>";
        // Devolucion multiple  (la llamada a estas funciones asumen que hay mas de un registro y por eso devuelven una coleccion aunque solo contenga un elemento)
        echo \App\User::find([1]) ."<br>";
        echo \App\User::whereId(1)->get() ."<br>";
        echo \App\User::whereEmail('jeff@codebyjeff.com')->get() ."<br>";
    }
}
