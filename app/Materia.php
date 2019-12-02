<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "Materia";

    protected $fillable = ['nombre'];

    public function scopeName($query ,$name)
    {
        if(trim($name) != "")
        {
            $query->where('nombre',"LIKE","%$name%");
        }
    }


}
