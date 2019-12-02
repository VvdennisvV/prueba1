<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = "Estudiante";

    protected $fillable = ['nombre','apellido','carrera'];

    public function scopeName($query ,$name)
    {
        if(trim($name) != "")
        {
            $query->where('nombre',"LIKE","%$name%");
        }
    }

}
