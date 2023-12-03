<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    public function Cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function Horario(){
        return $this->belongsTo(Horario::class);
    }
    public function Pelicula(){
        return $this->belongsTo(Pelicula::class);
    }
}
