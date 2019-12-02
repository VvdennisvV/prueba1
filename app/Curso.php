<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "Curso";

    protected $fillable = ['nombre','aula'];

    public function scopeName($query ,$name)
    {
        if(trim($name) != "")
        {
            $query->where('nombre',"LIKE","%$name%");
        }
    }

}
