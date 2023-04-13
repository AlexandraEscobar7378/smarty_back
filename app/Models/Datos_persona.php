<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos_persona extends Model
{
    use HasFactory;
    protected $table = 'datos_persona';

    public $timestamps=false;
    protected $fillable=[
        "dui",
        "nombre",
        "apellido",
        "foto",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
}
