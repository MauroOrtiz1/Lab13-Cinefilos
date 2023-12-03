<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    public function Horario(){
        return $this->hasOne(Horario::class);
    }
    public function Entrada(){
        return $this->hasOne(Entrada::class);
    }
}
