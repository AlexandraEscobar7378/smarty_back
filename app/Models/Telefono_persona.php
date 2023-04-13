<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono_persona extends Model
{
    use HasFactory;
    protected $table = 'telefono_persona';

    public $timestamps=false;
    protected $fillable=[
        "numero_telefono",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
