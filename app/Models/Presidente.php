<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presidente extends Model
{
    use HasFactory;

     // Relacion uno a uno (inversa)
     public function equipo(){
        return $this->belongsTo('App\Models\Equipo');
    }
}
