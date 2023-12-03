<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function Sala(){
        return $this->hasOne(Sala::class);
    }
    public function Entrada(){
        return $this->HasOne(Entrada::class);
    }
}
