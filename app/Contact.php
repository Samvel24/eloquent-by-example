<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Se asigna al campo $table el nombre de la tabla en la base de datos (no se llama 'contacts')
    protected $table = 'tblcontacts';

    // Se asigna al campo $primaryKey el nombre de la llave primaria en la base da datos (se especifica cual es la llave primaria)
    protected $primaryKey = 'Contacts_ID';
}
