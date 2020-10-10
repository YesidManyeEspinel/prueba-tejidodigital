<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";

    //Columnas para motrar de la tabla
    protected $fillable = ['nombre','edad'];
}
