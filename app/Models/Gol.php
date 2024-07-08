<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function jugadors(){
        return $this->hasMany('App\Models\Jugador');
    }
    public function partido(){
        return $this->belongsTo('App\Models\Partido');
    }
}
