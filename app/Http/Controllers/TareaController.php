<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareaController extends Controller
{
    // Tarea 1 (modificada por mi): correo de cada uno los usuarios y el(los) nombre(s) de su(s) hamster(s)
    public function dueniosHamsters()
    {
        foreach (\App\User::has('gerbils')->get() as $owner) // has('gerbils') se refiere al método gerbils() del modelo User
        {
            echo "Correo del duenio: " . $owner->email . "<br>";
            echo "Hamsters de este usuario: " ."<br>";
            foreach ($owner->gerbils as $gerbil)
            {
                echo $gerbil->name . "<br>";
            }
            echo "<br>";
        }
    }

    // Tarea 2: proporcione una lista de todos los usuarios, así como un recuento de cuántos jerbos han registrado
    public function usuariosYcantidadHamsters()
    {
        $owners = \App\User::withCount('gerbils')->get();

        foreach ($owners as $owner)
        {
            echo $owner->name . ': ' .$owner->gerbils_count . "<br>"; // NombreUsuario: numeroHamsters
        }
    }

    // Tarea 3: dame una lista de todos los usuarios con un recuento de jerbos cuyo nombre comience con "F
    public function nombreEmpiezaConF()
    {
        $owners = \App\User::withCount(['gerbils' => function($q){ // withCount(['gerbils')... se refiere al método gerbils() del modelo User
            $q->where('name','LIKE', 'F%');
        }])->get();
        
        foreach ($owners as $owner)
        {
            echo $owner->name . ': ' .$owner->gerbils_count . "<br>"; // NombreUsuario: nombreEmpiezaConF
        }
    }
}
