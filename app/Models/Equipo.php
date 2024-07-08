<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    // Relacion uno a uno
    public function presidente(){
        return $this->hasOne('App\Models\Presidente');
    }

    //Relacion muchos a muchos
    public function partidos(){
      return $this->belongsToMany('App\Models\Partido');
    }

    
    // Relacion uno a muchos
    public function jugadors(){
        return $this->hasMany('App\Models\Jugador');
    }
}
