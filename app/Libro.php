<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable = ['Nombre', 'Autor', 'description'];
}
