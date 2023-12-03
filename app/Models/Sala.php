<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    public function Cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function Horario(){
        return $this->hasOne(Horario::class);
    }
}
