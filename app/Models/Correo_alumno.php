<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Correo_alumno extends Model
{
    use HasFactory;
    protected $table = 'correo_alumno';

    public $timestamps=false;
    protected $fillable=[
        "correo",
        "fecha_registro",
        "fecha_actualizacion",
        "estado",
        
    ];
    
}
