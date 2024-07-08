<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
 
     //Relacion muchos a muchos (inversa)
    public function equipos(){
       return $this->belongsToMany('App\Models\Equipo');
    }

    public function gols(){
        return $this->hasMany('App\Models\Gol');
    }
}
