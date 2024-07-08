<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    // Relacion uno a muchos (inversa)
    public function equipo(){
        return $this->belongsTo('App\Models\Equipo');
    }

    // Relacion uno a muchos (inversa)
    public function gol(){
        return $this->belongsTo('App\Models\Gol');
    }
}
