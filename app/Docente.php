<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    protected $table = "Docente";

    protected $fillable = ['nombre','apellido','profesion','direccion','celular'];

    public function scopeName($query ,$name)
    {
        if(trim($name) != "")
        {
            $query->where('nombre',"LIKE","%$name%");
        }
    }
}
